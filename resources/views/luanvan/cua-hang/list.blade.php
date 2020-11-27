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

                    <div class="row" style="margin-left: 0px;">
                        <div class="col-lg-4 col-xl-4 mb10">
                            <div class="breadcrumb_content style2 mb30-991">
                                <h2 class="breadcrumb_title">Cửa hàng</h2>
                                <p>We are glad to see you again!</p>
                            </div>
						</div>
                    </div>
						
					<div class="row"  style="margin-left: 0px;">
						<div class="col-lg-12">
							<div class="sp_search_content">
								<div class="search_result">
									<p>9 Search results</p>
								</div>
								<div class="search_drpdwn text-right tac-xsd mb25">
									<select class="selectpicker show-tick">
										<option>Sort by:  Featured First</option>
										<option>Recent</option>
										<option>Old Review</option>
									</select>
								</div>
							</div>
						</div>
					</div>

					<div class="row"  style="margin-left: 0px;">
						
						@foreach($cuahang as $ch)
						<div class="col-sm-6 col-lg-4 col-xl-4">
							<div class="shop_grid">
								<div class="thumb">
									<img class="img-fluid w100" src="{{asset($ch->sanpham_path)}}" alt="1.png')}}">
									<div class="tag">Sale</div>
								</div>
								<div class="details">
									<h4 class="item-tile">{{ $ch->sanpham_ten }} <span class="price">{{ number_format($ch->sanpham_gia,0,',','.') }} đ</span></h4>
									<a href="{{ route('cuahang.checkout',['slug' => $ch->slug]) }}" class="btn btn-thm add_to_cart" style="padding-top: 12px;">
										Mua hàng
									</a>
								</div>
							</div>
						</div>
						@endforeach
						
						{{--    --}}
						<div class="col-lg-12">
							<div class="mbp_pagination mt20">
								<ul class="page_navigation">
									<li class="page-item">
										<a class="page-link" href="#"><span class="flaticon-left-arrow-1"></span></a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active" aria-current="page">
										<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
									</li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">...</a></li>
									<li class="page-item"><a class="page-link" href="#">29</a></li>
									<li class="page-item">
										<a class="page-link" href="#"><span class="flaticon-right-arrow"></span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection