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
                                <h2 class="breadcrumb_title">Thanh toán</h2>
                                <p>We are glad to see you again!</p>
                            </div>
						</div>
                    </div>
                   
                    <div class="row" style="margin-left: 0px;">
                        <div class="col-md-12 col-lg-7 col-xl-7">
                            <div class="checkout_form style2">
                                <h4 class="mb40">Chi tiết hóa đơn</h4>
                                <div class="heading text-center">
                                    <p>Nếu có voucher? Nhâp voucher ở đây</p>
                                </div>
                                <div class="checkout_coupon ui_kit_button">
                                    @if(session('error')) 
                                        <div class="alert alert-danger" style="width: 70%; margin-left:14%;" >
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <form class="form-inline form1" action="{{ route('cuahang.checkout',['slug' => $product->slug]) }}" method="GET">
                                        <input class="form-control coupon_input mr-sm-4" type="text" placeholder="Coupon Code" name="voucher">
                                        <button type="submit" class="btn">Apply Coupon</button>
                                    </form>
                                    {{-- 123 --}}
                    <form action="{{ route('cuahang.payment') }}" method="POST" > {{ csrf_field() }} 
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputName">Họ *</label>
                                                <input id="form_name" name="ho" class="form-control" value="{{ Auth::user()->ho }}" type="text" disabled>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputName2">Tên *</label>
                                                <input id="form_name2" name="ten" class="form-control" value="{{ Auth::user()->ten }}" disabled type="text">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail">Email</label>
                                                <input id="form_email" name="email" class="form-control required email" value="{{ Auth::user()->email }}" disabled type="email">
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="exampleInputName3">Địa chỉ *</label>
                                                <input id="form_name4" name="diachi" class="form-control mb10" value="{{ Auth::user()->dia_chi }}" disabled type="text">
                                                
                                            </div>
                                        </div>
                                        {{--    --}}
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputName5">Tỉnh thành / Thành phố *</label>
                                                <input id="form_name7" name="tinhthanh" class="form-control" value="{{ Auth::user()->phuongxa->quanhuyen->tinhthanh->province_name }}" disabled type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputName5">Quận / Huyện *</label>
                                                <input id="form_name7" name="quanhuyen" class="form-control" disabled value="{{ Auth::user()->phuongxa->quanhuyen->district_prefix }} {{ Auth::user()->phuongxa->quanhuyen->district_name }}" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputProvince">Phường / Xã *</label>
                                                <input id="form_name8" name="phuongxa" class="form-control" disabled value="{{ Auth::user()->phuongxa->ward_prefix }} {{ Auth::user()->phuongxa->ward_name }}" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="exampleInputPhone">Điện thoại *</label>
                                                <input id="form_phone" disabled name="sdt" class="form-control" value="(+84) {{ Auth::user()->dien_thoai }}" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-5">
                            <div class="order_sidebar_widget mb30">
                                <h4 class="title">Đặt hàng</h4>
                                <ul>
                                    <li><p>{{ $product->sanpham_ten }} <span class="float-right">{{  number_format($product->sanpham_gia,0,',','.') }}  đ</span></p></li>
                                    
                                    <li class="subtitle"><p>Tổng <span class="float-right">{{  number_format($product->sanpham_gia,0,',','.') }}</span></p></li>
                                    @if($voucher)
                                    <li class="subtitle">
                                        <p>
                                            Giảm giá 
                                            <span class="float-right totals color-orose">
                                                {{ $voucher->data->get('discount_percent') }}%
                                            </span>
                                        </p>
                                    </li>
                                    @endif
                                    <li class="subtitle"><p>Tổng đơn hàng <span class="float-right totals color-orose">{{  number_format($total_price,0,',','.') }} đ</span></p></li>
                                </ul>
                            </div>
                            <div class="payment_widget">
                                <div class="ui_kit_checkbox style2">
                                    <h4 class="mb20">Phương thức thanh toán</h4>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck80">
                                        <label class="custom-control-label" for="customCheck80">Direct bank transfer</label>
                                    </div>
                                    <div class="bt_details">
                                        <p>Make your payment directly into our bank account. Please 123 your Order ID 123 the payment reference.Your order will not be shipped until the funds have cleared in our account.</p>
                                    </div>
                                        
                                    @php
                                        $stt = 1;
                                        $i= 0;
                                    @endphp
                                    
                                    @foreach($phuongthuc as $payment)
                                    <div class="custom-control custom-checkbox" style="padding-left: 0px; margin-top:10px; ">
                                        <input name="phuongthuc" @php  echo 'type="radio"  '.($i==0 ? "checked" : "").'';  @endphp @if($payment->trangthai->ten_trangthai == 'Disable') disabled @endif>

                                        <label class="form-check-label" for="exampleRadios{{ $stt++ }}" >
                                            <span style="font-family: 'Nunito', sans-serif;">{{ $payment->ten_phuongthuc }} </span>
                                            &nbsp
                                            <img class="pr15" src="{{ asset($payment->path_logo) }}" alt="payment.png">
                                        </label>
                                    </div>
                                    @endforeach

                                
                                </div>
                            </div>
                            <div class="ui_kit_button payment_widget_btn">
                                <button type="submit" class="btn dbxshad btn-lg btn-thm btn-block">
                                    Thanh toán
                                </button>
                            </div>
                            {{--  <div class="payment payment-paypal">
                                <div class="table-responsive">
                                        
                                        <input type="hidden" name="khoangtrang" value="&nbsp" >
                                        
                                        <div class="form-group">
                                            <label for="order_id">Mã hóa đơn</label>
                                            <input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo date("YmdHis") ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="amount">Số tiền</label>
                                            <input class="form-control" id="amount"
                                                    name="amount" type="number" value="{{ $product->sanpham_gia }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="order_desc">Nội dung thanh toán</label>
                                            <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Noi dung thanh toan</textarea>
                                        </div>
                                        
                                        
                                        <input name="vnpay" type="submit" class="btn btn-main" value="Thanh toán"> 
                    
                                </div>
                            </div>  --}}
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection