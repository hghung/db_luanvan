    <div class="col-lg-12">
        <div class="product_single_content">
            <div class="mbp_pagination_comments mt30">
                <div class="mbp_comment_form style2">
                    <h4>Viết đánh giá và xếp hạng</h4>
                        @if($errors->has('commentable_type'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('commentable_type') }}
                            </div>
                        @endif
                        @if($errors->has('commentable_id'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('commentable_id') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('comments.store') }}">
                            @csrf
                            @honeypot
                            <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
                            <input type="hidden" name="commentable_id" value="{{ $model->getKey() }}" />
                            <ul class="sspd_review">
                                <div id="insect_rateyo" class="rateyo"
                                    data-rateyo-rating="5"
                                    data-rateyo-num-stars="5"
                                    data-rateyo-score="5">
                                </div>
                                <input type="hidden" id="rating_insect" name="rating" value="5" required>

                            </ul>
                                
                            <div class="form-group">
                                <textarea class="form-control @if($errors->has('message')) is-invalid @endif" name="message" rows="5" placeholder="Viết đánh giá của bạn"></textarea>
                            </div>
                            <button type="submit" class="btn btn-thm">Gửi đánh giá <span class="flaticon-right-arrow-1"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<br />