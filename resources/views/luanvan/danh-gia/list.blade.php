@extends('luanvan.master')
@section('title','Dashbord')
@section('header-account')
style2 menu-fixed main-menu
@endsection

@section('content')
    @include('luanvan.tai-khoan.header-left')
    <section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-sm-12 col-lg-8 col-xl-10 maxw100flex-992">
					<div class="row">
						
						<div class="col-lg-8 col-xl-9 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Đánh giá</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						<div class="col-lg-4 col-xl-3 mb10">
							<ul class="sasw_list mb0">
								<li class="search_area">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Search">
								    	<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
								    </div>
								</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div id="myreview" class="my_dashboard_review">
								<div class="review_content">
                                    <h4>Đánh giá của bạn</h4>
                                    {{--    --}}
                                    @foreach($review as $reviews)
									<div class="media pb30 mt30 bb1">
										<img class="mr-3" src="{{asset('public/luanvan/images/resource/review.png')}}" alt="Review image">
										<div class="media-body">
									    	<h5 class="review_title mt-0">Your review on 
												<a href="{{ route('single',$reviews->bantin->slug) }}">
													<span class="text-thm">
														{{ $reviews->bantin->tieu_de }}
													</span>
												</a>
												<span class="sspd_review float-right">
													<ul>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</span>
									    	</h5>
									    	<a class="review_date" href="#">December 28, 2020</a>
									    	<p class="para">{!!  $reviews->comment  !!}</p>
							    			<ul class="view_edit_delete_list mb0 mt35">
							    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="#" data-toggle="modal" data-target="#exampleModal"><span class="flaticon-edit"></span></a></li>
												<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="{{ route('review.del',$reviews->id) }}"><span class="flaticon-garbage"></span></a></li>
							    			</ul>
										</div>
                                    </div>
                                    @endforeach
									{{--  end  --}}
                                </div>
                                {!! $review->links() !!}
                                
							</div>
						</div>
						{{--  start  --}}
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Cập nhật đánh giá</h5>
										<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									</div>
									<form    method="POST"  action="#" enctype="multipart/form-data"> {{ csrf_field() }}

										<div class="modal-body">

												<div class="form-group">
													<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
												</div>
												
										</div>
										<div class="modal-footer">
											<button class="btn btn-primary" type="submit">
												Cập nhật
											</button>
										</div>
									</form>

								</div>
							</div>
						</div>
						{{--  end  --}}
						<div class="col-lg-12">
							<div id="client_myreview" class="my_dashboard_review mt30">
								<div class="review_content">
									<h4>Đánh giá của khách hàng</h4>
									<div class="media pb30 mt30 bb1">
										<img class="mr-3" src="{{asset('public/luanvan/images/resource/review2.png')}}" alt="Review image">
										<div class="media-body">
									    	<h5 class="review_title mt-0">Kathy Brown <span class="text-thm">Villa called Archangel</span>
												<span class="sspd_review float-right">
													<ul>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</span>
									    	</h5>
									    	<a class="review_date" href="#">December 28, 2020</a>
									    	<p class="para">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium voluptates eum, velit recusandae, ducimus earum aperiam commodi error officia optio aut et quae nam nostrum!</p>
							    			<ul class="view_edit_delete_list mb0 mt35">
							    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Reply"><a href="#"><span class="flaticon-reply"></span></a></li>
							    			</ul>
										</div>
									</div>
									<div class="media pb30 mt30 bb1">
										<img class="mr-3" src="{{asset('public/luanvan/images/resource/review3.png')}}" alt="Review image">
										<div class="media-body">
									    	<h5 class="review_title mt-0">Nina Wallker <span class="text-thm">Sunset Studio</span>
												<span class="sspd_review float-right">
													<ul>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</span>
									    	</h5>
									    	<a class="review_date" href="#">December 28, 2020</a>
									    	<p class="para">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium voluptates eum, velit recusandae, ducimus earum aperiam commodi error officia optio aut et quae nam nostrum!</p>
							    			<ul class="view_edit_delete_list mb0 mt35">
							    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Reply"><a href="#"><span class="flaticon-reply"></span></a></li>
							    			</ul>
										</div>
									</div>
									<div class="media mt30">
										<img class="mr-3" src="{{asset('public/luanvan/images/resource/review4.png')}}" alt="Review image">
										<div class="media-body">
									    	<h5 class="review_title mt-0">Anna Harrison <span class="text-thm">Nice Room With View</span>
												<span class="sspd_review float-right">
													<ul>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
														<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													</ul>
												</span>
									    	</h5>
									    	<a class="review_date" href="#">December 28, 2020</a>
									    	<p class="para">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium voluptates eum, velit recusandae, ducimus earum aperiam commodi error officia optio aut et quae nam nostrum!</p>
							    			<ul class="view_edit_delete_list mb0 mt35">
							    				<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Reply"><a href="#"><span class="flaticon-reply"></span></a></li>
							    			</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('public/luanvan/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/luanvan/toastr/toastr.min.js')}}" ></script>
            

    <script src="{{asset('public/luanvan/jquery2.0.3.min.js')}}" type="text/javascript"></script>
    
            
    {!! Toastr::message() !!}
   
	
@endsection