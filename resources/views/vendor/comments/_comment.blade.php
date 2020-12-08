@inject('markdown', 'Parsedown')
@php($markdown->setSafeMode(true))

    <div class="mbp_first media">
        @if(!$comment->commenter->avatar)
        <img style="width:10%;" class="mr-3" src="https://www.gravatar.com/avatar/{{ md5($comment->commenter->email ?? $comment->guest_email) }}.jpg?s=64" alt="{{ $comment->commenter->name ?? $comment->guest_name }} Avatar">
        @else
        <img style="border-radius:50%;width:57px; height:57px;" class="mr-3" src="{{asset($comment->commenter->avatar) }}" alt="{{ $comment->commenter->name ?? $comment->guest_name }} Avatar" >
        @endif

        <div class="media-body">
            <h4 class="sub_title mt-0">
                <a href="#">{{ $comment->commenter->name ?? $comment->guest_name }}</a>
                <div class="sspd_review dif">
                    <ul class="ml10">
                        @if($comment->rating2->rating == 5)
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        @elseif($comment->rating2->rating == 4)
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        @elseif($comment->rating2->rating == 3)
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        @elseif($comment->rating2->rating == 2)
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        @elseif($comment->rating2->rating == 1)
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        @endif
                        
                        <li class="list-inline-item"></li>
                    </ul>
                </div>
            </h4>
            <a class="sspd_postdate fz14" href="#">{{ $comment->created_at->diffForHumans() }} </a>
            @can('edit-comment', $comment)
                <button data-toggle="modal" data-target="#comment-modal-{{ $comment->getKey() }}" class="btn btn-sm btn-link text-uppercase">
                    <i class="fa fa-pencil"></i>
                </button>
            @endcan
            @can('delete-comment', $comment)
                <a href="{{ route('comments.destroy', $comment->getKey()) }}" onclick="event.preventDefault();document.getElementById('comment-delete-form-{{ $comment->getKey() }}').submit();" class="btn btn-sm btn-link text-danger text-uppercase"><i class="fa fa-trash-o"></i></a>
                <form id="comment-delete-form-{{ $comment->getKey() }}" action="{{ route('comments.destroy', $comment->getKey()) }}" method="POST" style="display: none;">
                    @method('DELETE')
                    @csrf
                </form>
            @endcan
           
            <p class="mt10">{{ $comment->comment }}</p>
           
        </div>
    </div>
    <div class="media-body">
        <h5 class="mt-0 mb-1"> <small class="text-muted"></small></h5>
        @can('edit-comment', $comment)
            <div class="modal fade" id="comment-modal-{{ $comment->getKey() }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('comments.update', $comment->getKey()) }}">
                            @method('PUT')
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">Chỉnh sữa đánh giá</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                                </button>
                            </div>
                            

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="message">Cập nhật đánh giá ở đây:</label>
                                    <div id="update_{{ $comment->id }}" data-rateyo-rating="{{ $comment->rating2->rating }}" style="margin-bottom:7px"></div>

                                    <textarea required class="form-control" name="message" rows="3">{{ $comment->comment }}</textarea>
                                <input type="hidden" id="update_rating" name="rating" value="{{ $comment->rating2->rating }}" required>

                                </div>

                            </div>
                            <script src="{{ asset('public/rateyo/jquery.rateyo.min.js') }}"></script>
                            <script>
                                $("#update_{{ $comment->id }}").rateYo({
                                    starWidth: "20px",

                                    spacing: "5px",
                                    fullStar: true
                                });
                        
                                $("#update_{{ $comment->id }}").rateYo()
                                  .on("rateyo.change", function (e, data) {
                                    //rateyo.change ko thay doi dc
                                    var rating2 = data.rating;
                                    
                                    $("#update_rating").val(rating2);
                                });
                            </script>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-secondary text-uppercase" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endcan
        <br />{{-- Margin bottom --}}

        {{-- Recursion for children --}}
        @if($grouped_comments->has($comment->getKey()))
            @foreach($grouped_comments[$comment->getKey()] as $child)
                @include('comments::_comment', [
                    'comment' => $child,
                    'reply' => true,
                    'grouped_comments' => $grouped_comments
                ])
            @endforeach
        @endif

    </div>
@if(isset($reply) && $reply === true)
  </div>
@else
  </li>
@endif