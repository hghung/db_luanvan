@php
    if (isset($approved) and $approved == true) {
        $comments = $model->approvedComments;
    } else {
        $comments = $model->comments;
    }
@endphp
    @if($comments->count() != 0 )
    <div class="col-lg-12" style="style: margin-top: 20px;">
        @php
            $tong = \App\Models\Rating::where('id_bantin','=',$model->id)->sum('rating');
            $count = \App\Models\Rating::where('id_bantin','=',$model->id)->count();
            $total = $tong / $count;
            $lamtron = round($total, 1, PHP_ROUND_HALF_ODD);
        @endphp

        <div class="product_single_content">
            <div class="mbp_pagination_comments mt30">
                <div class="row" style="margin-top: 15px; margin-left: 20px;">
                    <h4 style="margin-top: 7px;">
                        <b>
                            Có 
                            <span style="color:blue">{{ $comments->count() }}</span> 
                            Đánh giá
                        </b>
                    </h4>
                    &nbsp
                    <div id="rateYo" data-rateyo-rating="{{ $total }}" style="margin-top:3px;">
                    </div>
                    <p style="margin-top: 5px; font-size: 15px;">( <span style="color:blue">{{ $lamtron }}</span> trên <span style="color:red">5</span> )</p>
                </div>
                {{--  cmt  --}}
                @php
                    
                    $comments = $comments->sortBy('created_at');
                    if (isset($perPage)) {
                        $page = request()->query('page', 1) - 1;

                        $parentComments = $comments->where('child_id', '');

                        $slicedParentComments = $parentComments->slice($page * $perPage, $perPage);

                        $m = Config::get('comments.model'); // This has to be done like this, otherwise it will complain.
                        $modelKeyName = (new $m)->getKeyName(); // This defaults to 'id' if not changed.

                        $slicedParentCommentsIds = $slicedParentComments->pluck($modelKeyName)->toArray();

                        // Remove parent Comments from comments.
                        $comments = $comments->where('child_id', '!=', '');

                        $grouped_comments = new \Illuminate\Pagination\LengthAwarePaginator(
                            $slicedParentComments->merge($comments)->groupBy('child_id'),
                            $parentComments->count(),
                            $perPage
                        );

                        $grouped_comments->withPath(request()->path());
                    } else {
                        $grouped_comments = $comments->groupBy('child_id');
                    }
                @endphp
                @foreach($grouped_comments as $comment_id => $comments)
                    {{-- Process parent nodes --}}
                    @if($comment_id == '')
                        @foreach($comments as $comment)
                            @include('comments::_comment', [
                                'comment' => $comment,
                                'grouped_comments' => $grouped_comments
                            ])
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    @endif
@isset ($perPage)
    {{ $grouped_comments->links() }}
@endisset

@auth
    @include('comments::_form')
@elseif(Config::get('comments.guest_commenting') == true)
    @include('comments::_form', [
        'guest_commenting' => true
    ])
@else

    <div class="col-lg-12">
        <div class="product_single_content">
            <div class="mbp_pagination_comments mt30">
                <div class="mbp_comment_form style2">
                    <h4>Viết đánh giá</h4>
                        <form method="POST" action="{{ route('comments.store') }}">
                            @csrf
                            @honeypot
                            <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
                            <input type="hidden" name="commentable_id" value="{{ $model->getKey() }}" />
                            <ul class="sspd_review">
                                <li class="list-inline-item">
                                    <ul class="mb0">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    </ul>
                                </li>
                                <li class="list-inline-item review_rating_para">Your Rating & Review</li>
                            </ul>
                                
                            <div class="form-group">
                                <textarea class="form-control @if($errors->has('message')) is-invalid @endif" name="message" rows="5" placeholder="Your Review"></textarea>
                            </div>
                            <a href="#" class="btn btn-thm" data-toggle="modal" data-target=".bd-example-modal-lg">Mời bạn đăng nhập<span class="flaticon-right-arrow-1"></span></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endauth
