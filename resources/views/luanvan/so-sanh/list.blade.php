@extends('luanvan.master')
@section('title','So sánh')
@section('header')
style2  navbar-scrolltofixed stricky main-menu
@endsection
@section('content')  

<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">So Sánh</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="{{ route('home1') }}">Trang chủ</a></li>
						    <li class="breadcrumb-item active" aria-current="page">So Sánh</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Pricing Table -->
	@if($cart->count() > 0)
	<section class="our-pricing bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>So Sánh</h2>
						<p>We provide full service at every step</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="membership_container">
						<ul class="mc_parent_list">
							<li class="list-inline-item">
								<ul class="mc_child_list one">
									<li><div class="membership_header dn"></div></li>
									<li>Tỉnh thành</li>
									<li>Phòng ngủ</li>
									<li>Phòng tắm</li>
									<li>Số tầng</li>
									<li>Diện tích</li>
									<li>Năm xây dựng</li>
									<li>Trạng thái</li>
									<li>Tiện ích</li>
								</ul>
							</li>

							{{--  --}}
							@foreach($cart as $cart2)
							<li class="list-inline-item">
								<ul class="mc_child_list two text-center">
									<li>
										<div class="membership_header">
											<div class="thumb">
												<a href="{{ route('compare.del',['id' => $cart2->rowId]) }}"><span class="flaticon-close"></span></a>
												<img style="width:260px; height:180px;" class="img-fluid " src="{{asset($cart2->options->img)}}" alt="1.jpg')}}">
												<div class="price">
													{{  number_format($cart2->price,0,',','.') }} đ
													@if($cart2->options->trangthai == 'Thuê')
													<span class="mnth">/th</span>
													@endif
												</div>
											</div>
											<div class="details">
												<h4>{{ $cart2->name }}</h4>
												<p>{{ $cart2->options->loaibds }}</p>
											</div>
										</div>
									</li>
									<li><a href="#">{{ $cart2->options->tinhthanh	 }}</a></li>
									<li><a href="#">{{ $cart2->options->phongngu	 }}</a></li>
									<li><a href="#">{{ $cart2->options->phongtam }}</a></li>
									<li><a href="#">{{ $cart2->options->sotang }}</a></li>
									<li><a href="#">{{ $cart2->options->dientich }} m²</a></li>
									<li><a href="#">{{ date("d-m-Y",strtotime($cart2->options->namxaydung ))}}</a></li>
									<li><a href="#">{{ $cart2->options->trangthai }}</a></li>
									@php 
										$count = $cart2->options->tienich->take(3);
									@endphp
									<li style="padding-top:20px !important;padding-bottom:0px !important">

										<h5 >
											@foreach($count as $tienich2)
											{{ $tienich2->taisan->ten_taisan }},
											@endforeach
										...

										</h5>
										<h6>
											<a href="{{ route('single',['slug' => $cart2->options->slug]) }}" style="color:blue">Xem thêm chi tiết</a>
										</h6>
									</li>
								</ul>
							</li>
							@endforeach
							{{--  --}}

							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	@else
	<section class="our-error bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="error_page footer_apps_widget">
						<img class="img-fluid" src="{{ asset('public/luanvan/images/resource/error.png') }}" alt="error.png">
						<div class="erro_code"><h1>Hiện tại không có mục so sánh nào !</h1></div>
						<p>Mời bạn thêm mục vào so sánh để thấy trang !</p>
						<form class="form-inline mailchimp_form">
							<label class="sr-only" for="inlineFormInputName">Name</label>
							<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName" placeholder="Search">
							<button type="submit" class="btn btn-primary mb-2"><span class="flaticon-magnifying-glass"></span></button>
						</form>
					</div>
					<a class="btn btn_error btn-thm" href="index.html">Back To Home</a>
				</div>
			</div>
		</div>
	</section>
	@endif

    @include('luanvan.footer')
	<script src="{{asset('public/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/toastr/toastr.min.js')}}" ></script>
           
   	{!! Toastr::message() !!}

    
@endsection
