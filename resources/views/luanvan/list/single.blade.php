@extends('luanvan.master')
@section('title','Chi tiết bảng tin')
@section('header')
style2  navbar-scrolltofixed stricky main-menu
@endsection
@section('content')   
<link rel="stylesheet" href="{{ asset('public/rateyo/jquery.rateyo.min.css') }}">

    <div class="single_page_listing_style">
        <div class="container-fluid p0">
            <div class="row">
                <div class="col-sm-6 col-lg-6 p0">
                    <div class="row m0">
                        <div class="col-lg-12 p0">
                            <div class="spls_style_one pr1 1px">
                                <img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/ls1.jpg')}}" alt="ls1.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 p0">
                    <div class="row m0">
                        @foreach($hinhanh3 as $hinhanh)
                            <div class="col-sm-6 col-lg-6 p0">
                                <div class="spls_style_one">
                                    <img class="img-fluid w100" style="width:387.300px; height:255px;" src="{{ asset($hinhanh->path)}}" alt="ls2.jpg">
                                </div>
                            </div>
                    @endforeach

                    @foreach($bantin->bds->hinhanh  as $hinhanh)
                        <a class="popup-img" href="{{ asset($hinhanh->path)}}"></a>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="p0">
        <div class="container">
            <div class="row listing_single_row">
                <div class="col-sm-6 col-lg-7 col-xl-8">
                    <div class="single_property_title">
                        <a href="{{ asset('public/luanvan/images/property/ls1.jpg')}}" class="upload_btn popup-img"><span class="flaticon-photo-camera"></span>Xem nhiều ảnh</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-5 col-xl-4">
                    <div class="single_property_social_share">
                        <div class="spss style2 mt10 text-right tal-400">
                            <ul class="mb0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="flaticon-transfer-1"></span>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="flaticon-heart"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="flaticon-share"></span>
                                    </a>


                                <li class="list-inline-item">
                                    <a id="map-tab" data-toggle="tab" href="#map_tabs" role="tab" aria-controls="map_tabs" aria-selected="false">
                                        <span style="color: #484848ec" class="flaticon-pin "></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agent Single Grid View -->
    <section class="our-agent-single bgc-f7 pb30-991">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="listing_sidebar dn db-991">
                        <div class="sidebar_content_details style3">
                            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
                            <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                                <div class="sidebar_advanced_search_widget">
                                    <h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
                                    <ul class="sasw_list style2 mb0">
                                        <li class="search_area">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
                                                <label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
                                            </div>
                                        </li>
                                        <li class="search_area">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
                                                <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Status</option>
                                                        <option>Apartment</option>
                                                        <option>Bungalow</option>
                                                        <option>Condo</option>
                                                        <option>House</option>
                                                        <option>Land</option>
                                                        <option>Single Family</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Property Type</option>
                                                        <option>Apartment</option>
                                                        <option>Bungalow</option>
                                                        <option>Condo</option>
                                                        <option>House</option>
                                                        <option>Land</option>
                                                        <option>Single Family</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="small_dropdown2">
                                                <div id="prncgs" class="btn dd_btn">
                                                    <span>Price</span>
                                                    <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                                </div>
                                                <div class="dd_content2">
                                                    <div class="pricing_acontent">
                                                        <input type="text" class="amount" placeholder="$52,239"> 
                                                        <input type="text" class="amount2" placeholder="$985,14">
                                                        <div class="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Bathrooms</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Bedrooms</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Garages</option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="candidate_revew_select">
                                                    <select class="selectpicker w100 show-tick">
                                                        <option>Year built</option>
                                                        <option>2013</option>
                                                        <option>2014</option>
                                                        <option>2015</option>
                                                        <option>2016</option>
                                                        <option>2017</option>
                                                        <option>2018</option>
                                                        <option>2019</option>
                                                        <option>2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="min_area style2 list-inline-item">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
                                            </div>
                                        </li>
                                        <li class="max_area list-inline-item">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
                                            </div>
                                        </li>
                                        <li>
                                            <div id="accordion" class="panel-group">
                                                <div class="panel">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
                                                        </h4>
                                                    </div>
                                                    <div id="panelBodyRating" class="panel-collapse collapse">
                                                        <div class="panel-body row">
                                                            <div class="col-lg-12">
                                                                <ul class="ui_kit_checkbox selectable-list float-left fn-400">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                            <label class="custom-control-label" for="customCheck1">Air Conditioning</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                                            <label class="custom-control-label" for="customCheck4">Barbeque</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                                            <label class="custom-control-label" for="customCheck10">Gym</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                                            <label class="custom-control-label" for="customCheck5">Microwave</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                                            <label class="custom-control-label" for="customCheck6">TV Cable</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                            <label class="custom-control-label" for="customCheck2">Lawn</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                                            <label class="custom-control-label" for="customCheck11">Refrigerator</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                            <label class="custom-control-label" for="customCheck3">Swimming Pool</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <ul class="ui_kit_checkbox selectable-list float-right fn-400">
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                                            <label class="custom-control-label" for="customCheck12">WiFi</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                                            <label class="custom-control-label" for="customCheck14">Sauna</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                                            <label class="custom-control-label" for="customCheck7">Dryer</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                                            <label class="custom-control-label" for="customCheck9">Washer</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                                            <label class="custom-control-label" for="customCheck13">Laundry</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                                            <label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                                            <label class="custom-control-label" for="customCheck15">Window Coverings</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_button">
                                                <button type="submit" class="btn btn-block btn-thm">Search</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sidebar_switch dn db-991 mb30 mb0-767">
                        <div id="main2">
                            <span id="open2" class="flaticon-filter-results-button filter_open_btn style3"> Show Filter</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 mt50">
                    <div class="row">
                        @php
                            $tong = \App\Models\Rating::where('id_bantin','=',$bantin->id)->sum('rating');
                            $count = \App\Models\Rating::where('id_bantin','=',$bantin->id)->count();
                            if($tong != 0)
                            {
                                $total2 = $tong / $count;
                            }
                        @endphp
                        <div class="col-lg-12" >
                            <div class="listing_single_description2 mt30-767 mb30-767" style="padding-bottom:15px;">
                                <div class="single_property_title">
                                    <h2>{{ $bantin->tieu_de }}</h2>
                                    <p>1421 San Pedro St, Los Angeles, CA 90015</p>
                                    @if($tong != 0)
                                    <div id="show_rateyo" data-rateyo-rating="{{ $total2  }}" style="margin-top:5px"></div>
                                    @endif
                                </div>
                                
                                <div class="single_property_social_share style2">
                                    <div class="price">
                                        <h2 >{{ number_format($bantin->gia_tien,0,',','.') }} <small>đ</small><small>/tháng</small></h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="listing_single_description style2">
                                <div class="lsd_list">
                                    <ul class="mb0">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                {{ $bantin->bds->loaibds->ten_loaiBDS }}
                                            </a>
                                        </li>
                                        @php 
                                            foreach($bantin->bds->cttaisan as $ct_taisan)
                                            {
                                                

                                            }

                                            foreach($bantin->bds->ctthuoctinh as $ct_thuoctinh)
                                            {
                                                if($ct_thuoctinh->thuoctinh->ten_thuoctinh == 'Diện tích' )
                                                {
                                                    $thuoctinh1 = 'Diện tích';
                                                    $dientich = $ct_thuoctinh->mo_ta;
                                                }

                                                if($ct_thuoctinh->thuoctinh->ten_thuoctinh == 'Năm xây dựng' )
                                                {
                                                    $namxaydung = $ct_thuoctinh->mo_ta;
                                                }

                                                if($ct_thuoctinh->thuoctinh->ten_thuoctinh == 'Phòng ngủ' )
                                                {
                                                    $thuoctinh2 = 'Phòng ngủ';
                                                    $phongngu = $ct_thuoctinh->mo_ta;
                                                }

                                                if($ct_thuoctinh->thuoctinh->ten_thuoctinh == 'Phòng tắm' )
                                                {
                                                    $thuoctinh3 = 'Phòng tắm';
                                                    $phongtam = $ct_thuoctinh->mo_ta;
                                                }

                                                if($ct_thuoctinh->thuoctinh->ten_thuoctinh == 'Số tầng' )
                                                {
                                                    $thuoctinh3 = 'Số tầng';
                                                    $sotang = $ct_thuoctinh->mo_ta;
                                                }


                                                
                                            }
                                        @endphp
                                        <li class="list-inline-item">
                                            <a href="#">
                                                {{ $thuoctinh2 }} : {{ $phongngu }}
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                {{ $thuoctinh3 }} : {{ $phongtam }}
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                {{ $thuoctinh1 }} : {{ $dientich }} m²
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <h4 class="mb30">Mô tả</h4>
                                <p class="mb25">Evans Tower very high demand corner junior one bedroom plus a large balcony boasting full open NYC views. You need to see the views to believe them. Mint condition with new hardwood floors. Lots of closets plus washer and dryer.</p>
                            
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <p class="mt10 mb10">{!! $bantin->mo_ta !!}</p>
                                    </div>
                                </div>
                                <p class="overlay_close">
                                    <a class="text-thm fz14" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        Show More <span class="flaticon-download-1 fz12"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                        {{-- Chi tiết tài sản --}}
                        <div class="col-lg-12">
                            <div class="additional_details" style="padding-bottom: 0px !important;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb15">Chi tiết tài sản</h4>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="list-inline-item">
                                            <li><p>Mã bản tin :</p></a></li>
                                            <li><p>Giá :</p></a></li>
                                            <li><p>Diện tích :</p></a></li>
                                            <li><p>Năm xây dựng :</p></a></li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li><p><span>{{ $bantin->ma_bantin }}</span></p></a></li>
                                            <li><p><span>{{ number_format($bantin->gia_tien,0,',','.') }}</span></p></a></li>
                                            <li><p><span>{{ $dientich }} m²</span></p></a></li>
                                            <li><p><span>{{ date("d-m-Y",strtotime($namxaydung)) }}</span></p></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-3">
                                        <ul class="list-inline-item">
                                            <li><p>Số tầng :</p></a></li>
                                            <li><p>Phòng ngủ :</p></a></li>
                                            <li><p>Phòng tắm :</p></a></li>
                                            <li><p>Garage Size :</p></a></li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li><p><span>{{ $sotang }}</span></p></a></li>
                                            <li><p><span>{{ $phongngu }} </span></p></a></li>
                                            <li><p><span>{{ $phongtam }} </span></p></a></li>
                                            <li><p><span>1</span></p></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-5">
                                        <ul class="list-inline-item">
                                            <li><p>Loại bất động sản :</p></a></li>
                                            <li><p>Trạng thái :</p></a></li>
                                        </ul>
                                        <ul class="list-inline-item">
                                            <li><p><span>{{ $bantin->bds->loaibds->ten_loaiBDS }}</span></p></a></li>
                                            <li><p><span>{{ $bantin->hinhthuc->ten_hinhthuc }}</span></p></a></li>
                                        </ul>
                                        <ul class="list-inline-item" style="margin-left: 100px;">
                                            <li><p><span>{!! $qrcode !!}</span></p></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Chi tiết bổ sung --}}
                        <div class="col-lg-12">
                            <div class="additional_details">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb15">Chi tiết bổ sung</h4>
                                    </div>
                                    @foreach($thuoctinh as $tt)
                                    <div class="col-md-6 col-lg-6">
                                        <div class="list-inline-item" >
                                            <p style=" font-size: 14px;font-family:Nunito;color: rgb(72, 72, 72);line-height: 2.857;margin-bottom: 0;">{{ $tt->thuoctinh->ten_thuoctinh }} :</p>
                                        </div>
                                        <div class="list-inline-item">
                                            <b style="font-size: 15px; font-family:Nunito;color: rgb(72, 72, 72);line-height: 2.857;margin-bottom: 0;">
                                                <span>
                                                    {{ $tt->mo_ta }} 
                                                    @if($tt->thuoctinh->ten_thuoctinh == 'Diện tích' || $tt->thuoctinh->ten_thuoctinh == 'Diện tích đất' )
                                                    m²
                                                    @elseif($tt->thuoctinh->ten_thuoctinh == 'Phòng ngủ' || $tt->thuoctinh->ten_thuoctinh == 'Phòng tắm' )
                                                    phòng
                                                    @elseif($tt->thuoctinh->ten_thuoctinh == 'Số tầng' )
                                                    tầng
                                                    @elseif($tt->thuoctinh->ten_thuoctinh == 'Lộ giới')
                                                    m
                                                    @endif
                                                </span>
                                            </b>
                                        </div>
                                    </div>



                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                        {{-- Tiệc ích --}}
                        <div class="col-lg-12">
                            <div class="application_statics mt30">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb10">Tiện ích</h4>
                                    </div>
                                    @foreach($taisan as $ts2)
                                    <div class="col-md-4">
                                        <a href="#" style="font-size: 14px;font-family: Nunito;color: #484848;line-height: 2.857; ">
                                            <span class="flaticon-tick" style="color: #ff5a5f;left: 0;position: relative;"></span>
                                            &nbsp {{ $ts2->taisan->ten_taisan }}
                                        </a>
                                    </div>
                                    
                                    @endforeach
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        {{-- gg map - thiet ke - video --}}
                        <div class="col-lg-12">
                            <div class="shop_single_tab_content style2 mt30">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Vị trí</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="listing-tab" data-toggle="tab" href="#listing" role="tab" aria-controls="listing" aria-selected="false">Bảng thiết kế nhà</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    {{-- gg map --}}
                                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <table class="table table-hover" style="margin-top: 10px; margin-left:20px;">
                                                    <thead>
                                                        <tr>
                                                            <th width="15%">Khoảng cách</th>
                                                            <th width="15%">Khoảng thời gian</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div style="margin-left: 15px"  id="khoangcach"></div>
                                                            </td>
                                                            <td >
                                                                <div style="margin-left: 15px" id="thoigian"></div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-md-3">
                                                <button id="get" style="background-color:#0099CC;border: 2px solid #0099CC; color: #fff; margin-top: 10px;" class="btn btn-success">Xem tọa độ</button>
                                            </div>
                                        </div>
                                        <div class="property_video" style="padding-top: 0px;">
                                            <div class="thumb">
                                                <style>
                                                    #map
                                                    {
                                                        width: 690px;
                                                        height: 390px;
                                                    }
                                                </style>
                            
                                                <div id="map">
                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Bảng thiết kế --}}
                                    <div class="tab-pane fade row pl15 pl0-1199 pr15 pr0-1199" id="listing" role="tabpanel" aria-labelledby="listing-tab">
                                        <div class="property_video">
                                            <div class="thumb">
                                                <div class="application_statics ">
                                                    <div class="faq_according style2">
                                                        <div class="accordion" id="accordionExample">
                                                            <h4>Tầng 1 </h4>
                                                            <div class="card floor_plan">
                                                                <div class="card-header" id="headingOne">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                            <ul class="mb0">
                                                                                <li class="list-inline-item">First Floor</li>
                                                                                <li class="list-inline-item"><p>Size:</p> <span>1267 Sqft</span></li>
                                                                                <li class="list-inline-item"><p>Rooms:</p> <span>670 Sqft</span></li>
                                                                                <li class="list-inline-item"><p>Baths:</p> <span>530 Sqft</span></li>
                                                                                <li class="list-inline-item"><p>Price:</p> <span>$1489</span></li>
                                                                            </ul>
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                                                    <div class="card-body text-center">
                                                                        <img class="img-fluid" src="{{ asset('public/luanvan/images/resource/floor_plan.png')}}" alt="floor_plan.png">
                                                                        <p>Plan description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h4>Tầng 2 </h4>

                                                            <div class="card floor_plan">
                                                                <div class="card-header active" id="headingTwo">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                            <ul class="mb0">
                                                                                <li class="list-inline-item">First Floor</li>
                                                                                <li class="list-inline-item"><p>Size:</p> <span>1267 Sqft</span></li>
                                                                                <li class="list-inline-item"><p>Rooms:</p> <span>670 Sqft</span></li>
                                                                                <li class="list-inline-item"><p>Baths:</p> <span>530 Sqft</span></li>
                                                                                <li class="list-inline-item"><p>Price:</p> <span>$1489</span></li>
                                                                            </ul>
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                                    <div class="card-body text-center">
                                                                        <img class="img-fluid" src="{{ asset('public/luanvan/images/resource/floor_plan.png')}}" alt="floor_plan.png">
                                                                        <p>Plan description. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- video --}}
                                    <div class="tab-pane fade row pl15 pl0-1199 pr15 pr0-1199" id="video" role="tabpanel" aria-labelledby="video-tab">
                                        <div class="property_video">
                                            <div class="thumb">
                                                <img class="pro_img img-fluid w100" src="{{ asset('public/luanvan/images/background/7.jpg')}}" alt="7.jpg">
                                                <div class="overlay_icon">
                                                    <a class="video_popup_btn red popup-youtube" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="flaticon-play"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="whats_nearby mt30">
                                <h4 class="mb10">Whats Nearby</h4>
                                <div class="education_distance mb15">
                                    <h5><span class="flaticon-college-graduation"></span> Education</h5>
                                    <div class="single_line">
                                        <p class="para"> Eladias Kids <span>(3.13 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="education_distance mb15 style2">
                                    <h5><span class="flaticon-heartbeat"></span> Health & Medical</h5>
                                    <div class="single_line">
                                        <p class="para">Eladias Kids <span>(3.13 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="education_distance style3">
                                    <h5><span class="flaticon-front-of-bus"></span> Transportation</h5>
                                    <div class="single_line">
                                        <p class="para">Eladias Kids <span>(3.13 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">8895 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Gear Up With ACLS <span>(4.66 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">7475 reviews</span></li>
                                        </ul>
                                    </div>
                                    <div class="single_line">
                                        <p class="para">Brooklyn Brainery <span>(3.31 miles)</span></p>
                                        <ul class="review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><span class="total_rive_count">3579 reviews</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  thong ke  --}}
                        {{--  <div class="col-lg-12">
                            <div class="application_statics">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="chart_circle_doughnut mt30">
                                            <h4>Payment Calculator</h4>
                                            <canvas class="mt50 mb50" id="myChart"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input ui_kit_select_search form-group">
                                            <select class="selectpicker" data-live-search="true" data-width="100%">
                                                <option data-tokens="Terms">Terms</option>
                                                <option data-tokens="Terms2">Terms2</option>
                                                <option data-tokens="Terms3">Terms3</option>
                                                <option data-tokens="Terms4">Terms4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <input type="text" class="form-control" id="formGroupExampleWebsite" placeholder="Interest">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <div class="my_profile_setting_input form-group">
                                            <input type="text" class="form-control" id="formGroupExampleFaceBook" placeholder="Home Price">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="my_profile_setting_input form-group">
                                            <input type="text" class="form-control" id="formGroupExampleTwitter" placeholder="Down Payment">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-2">
                                        <div class="my_profile_setting_input form-group">
                                            <input type="text" class="form-control" id="formGroupExampleLinkedin" placeholder="10%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="application_statics shop_single_tab_content style3 mt30">
                                <ul class="nav nav-tabs float-right fn-414" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="hourly-tab" data-toggle="tab" href="#hourly" role="tab" aria-controls="hourly" aria-selected="true">Hours</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="weekly-tab" data-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="false">Weekly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="hourly" role="tabpanel" aria-labelledby="hourly-tab">
                                        <h4 class="mt10-414">Property Views</h4>
                                        <canvas id="myChartweave" width="100%" height="50"></canvas>
                                    </div>
                                    <div class="tab-pane fade" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
                                        <h4 class="mt10-414">Property Views</h4>
                                        <div class="c_container w100"></div>
                                    </div>
                                    <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                                        <h4 class="mt10-414">Property Views</h4>
                                        <canvas class="ls_barchart" id="chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>  --}}
                        {{--  end chart  --}}
                        {{--  star cmt  --}}


                        
                        @comments(['model' => $bantin])
                                    
                                    
                                
                        
                        {{--  end cmt  --}}
                       
                    </div>
                </div>

                <div class="col-lg-4 col-xl-4 mt50">
                    <div class="sidebar_listing_list">
                        <div class="sidebar_advanced_search_widget">
                            <div class="sl_creator">
                                <h4 class="mb25">Người đăng</h4>
                                <div class="media">
                                    <img class="mr-3" src="{{ asset('public/luanvan/images/team/lc1.png')}}" alt="lc1.png">
                                    <div class="media-body">
                                        
                                        <h5 class="mt-0 mb0">
                                            @if($bantin->user->ho && $bantin->user->ten)
                                                {{ $bantin->user->ho }} {{ $bantin->user->ten }}

                                            @elseif(!$bantin->user->ho && !$bantin->user->ten)
                                                {{ $bantin->user->username }}

                                            @endif
                                        </h5>
                                        <p class="mb0">
                                            @if($bantin->user->dien_thoai)
                                                (+84) {{ $bantin->user->dien_thoai }}
                                            @endif
                                        </p>
                                        <p class="mb0"><a href="#" class="__cf_email__" >{{ $bantin->user->email }}</a></p>
                                        <a class="text-thm" href="#">View My Listing</a>
                                    </div>
                                </div>
                            </div>
                            {{--  dat lich  --}}
                            <h4>Đặt lịch hẹn</h4>
                            @if(Auth::check())
                            <form action="{{ route('datlich.post',['id' => $bantin->id]) }}" method="POST">
                                {{ csrf_field() }}
                                @if($datlich->count() == 0)
                                <ul class="sasw_list mb0">
                                    <li class="search_area">
                                        <div class="form-group ">
                                            <input class="form-control" type="text" id="datepicker" name="ngay_hen" required>
                                        </div>
                                    </li>
                                    <li class="search_area">
                                        <div class="form-group">
                                            <input class="form-control" type="time"  name="gio_hen" required>
                                        </div>
                                    </li>
                                    <li class="search_area">
                                        <div class="form-group">
                                            <textarea name="noi_dung" class="form-control"  required="required" placeholder="Ghi chú"></textarea>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_button">
                                            <button type="submit" class="btn btn-block btn-thm">Đặt lịch hẹn</button>
                                        </div>
                                    </li>
                                </ul>
                                @elseif($datlich)
                                    @foreach($datlich as $row)
                                    <ul class="sasw_list mb0">
                                        <li class="search_area">
                                            <div class="form-group ">
                                                <input class="form-control" type="text" id="datepicker" name="ngay_hen" required
                                                @if($row)
                                                value="{{ date('d-m-Y',strtotime($row->ngay_hen)) }}" disabled
                                                @endif>
                                            </div>
                                        </li>
                                        <li class="search_area">
                                            <div class="form-group">
                                                <input class="form-control" type="time"  name="gio_hen" required
                                                @if($row)
                                                value="{{ date('H:i',strtotime($row->gio_hen)) }}" disabled
                                                @endif >
                                            </div>
                                        </li>
                                        <li class="search_area">
                                            <div class="form-group">
                                                <textarea name="noi_dung" class="form-control"  required="required" placeholder="Ghi chú">@if($row){!! $row->noi_dung  !!}@endif</textarea>
                                            </div>
                                        </li>
                                        <li>
                                            @if($row->id_trangthai == 1)
                                            <div class="search_option_button">
                                                <input type="hidden" value="{{ $row->id }}" name="nhac_lich">
                                                <button type="submit" class="btn btn-block btn-thm" style="background-color: #f38c37; color:#fff; border: #fff">Nhắc lịch hẹn</button>
                                            </div>
                                            @elseif($row->id_trangthai == 2 )
                                            <div class="search_option_button">
                                                <input type="hidden" name="duyet" value="1">
                                                <button type="submit" class="btn btn-block btn-thm" style="background-color: #67e41f; color:#fff; border: #fff">Đã đặt lịch</button>
                                            </div>
                                            @endif
                                        </li>
                                        
                                    </ul>
                                    @endforeach
                                @endif
                            </form>
                            @else
                            <ul class="sasw_list mb0">
                                <li class="search_area">
                                    <div class="form-group ">
                                        <input class="form-control" type="text" id="datepicker" name="ngay_hen" required>
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input class="form-control" type="time"  name="gio_hen" required>
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <textarea name="noi_dung" class="form-control"  required="required" placeholder="Ghi chú"></textarea>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_button">
                                        <a href="#" class="btn btn-block btn-thm" data-toggle="modal" data-target=".bd-example-modal-lg">Đăng nhập</a>
                                    </div>
                                </li>
                            </ul>
                            @endif
                            <link rel="stylesheet" href="{{ asset('public/jquery-ui-1.11.0/jquery-ui.theme.css') }}">
                                <script src="{{ asset('public/jquery-ui-1.11.0/jquery-ui.js') }}"></script>
                                <script>
                                    var dateToday = new Date(); 
                                    $(function() {
                                        $("#datepicker").datepicker({
                                            dateFormat: 'dd-mm-yy',
                                            numberOfMonths: 1,
                                            minDate: dateToday
                                        });
                                    });
                                </script>
                            {{--  dat lich  --}}
                        </div>
                    </div>
                    <div class="sidebar_listing_list">
                        <div class="sidebar_advanced_search_widget">
                            <ul class="sasw_list mb0">
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
                                        <label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
                                        <label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick">
                                                <option>Status</option>
                                                <option>Apartment</option>
                                                <option>Bungalow</option>
                                                <option>Condo</option>
                                                <option>House</option>
                                                <option>Land</option>
                                                <option>Single Family</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick">
                                                <option>Property Type</option>
                                                <option>Apartment</option>
                                                <option>Bungalow</option>
                                                <option>Condo</option>
                                                <option>House</option>
                                                <option>Land</option>
                                                <option>Single Family</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="small_dropdown2">
                                        <div id="prncgs2" class="btn dd_btn">
                                            <span>Price</span>
                                            <label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
                                        </div>
                                        <div class="dd_content2">
                                            <div class="pricing_acontent">
                                                <input type="text" class="amount" placeholder="$52,239"> 
                                                <input type="text" class="amount2" placeholder="$985,14">
                                                <div class="slider-range"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick">
                                                <option>Bathrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick">
                                                <option>Bedrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick">
                                                <option>Garages</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="candidate_revew_select">
                                            <select class="selectpicker w100 show-tick">
                                                <option>Year built</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                                <option>2015</option>
                                                <option>2016</option>
                                                <option>2017</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li class="min_area list-inline-item">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
                                    </div>
                                </li>
                                <li class="max_area list-inline-item">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
                                    </div>
                                </li>
                                <li>
                                    <div id="accordion" class="panel-group">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
                                                </h4>
                                            </div>
                                            <div id="panelBodyRating" class="panel-collapse collapse">
                                                <div class="panel-body row">
                                                    <div class="col-lg-12">
                                                        <ul class="ui_kit_checkbox selectable-list float-left fn-400">
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck16">
                                                                    <label class="custom-control-label" for="customCheck16">Air Conditioning</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck17">
                                                                    <label class="custom-control-label" for="customCheck17">Barbeque</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck18">
                                                                    <label class="custom-control-label" for="customCheck18">Gym</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck19">
                                                                    <label class="custom-control-label" for="customCheck19">Microwave</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck20">
                                                                    <label class="custom-control-label" for="customCheck20">TV Cable</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck21">
                                                                    <label class="custom-control-label" for="customCheck21">Lawn</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck22">
                                                                    <label class="custom-control-label" for="customCheck22">Refrigerator</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck23">
                                                                    <label class="custom-control-label" for="customCheck23">Swimming Pool</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <ul class="ui_kit_checkbox selectable-list float-right fn-400">
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck24">
                                                                    <label class="custom-control-label" for="customCheck24">WiFi</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck25">
                                                                    <label class="custom-control-label" for="customCheck25">Sauna</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck26">
                                                                    <label class="custom-control-label" for="customCheck26">Dryer</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck27">
                                                                    <label class="custom-control-label" for="customCheck27">Washer</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck28">
                                                                    <label class="custom-control-label" for="customCheck28">Laundry</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck29">
                                                                    <label class="custom-control-label" for="customCheck29">Outdoor Shower</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck30">
                                                                    <label class="custom-control-label" for="customCheck30">Window Coverings</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_button">
                                        <button type="submit" class="btn btn-block btn-thm">Search</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="terms_condition_widget">
                        <h4 class="title">Featured Properties</h4>
                        <div class="sidebar_feature_property_slider">
                            <div class="item">
                                <div class="feat_property home7 agent">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp1.jpg')}}" alt="fp1.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                <li class="list-inline-item"><a href="#">Featured</a></li>
                                            </ul>
                                            <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                            <h4 class="posr color-white">Renovated Apartment</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feat_property home7 agent">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp2.jpg')}}" alt="fp2.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                <li class="list-inline-item"><a href="#">Featured</a></li>
                                            </ul>
                                            <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                            <h4 class="posr color-white">Renovated Apartment</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feat_property home7 agent">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp3.jpg')}}" alt="fp3.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                <li class="list-inline-item"><a href="#">Featured</a></li>
                                            </ul>
                                            <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                            <h4 class="posr color-white">Renovated Apartment</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feat_property home7 agent">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp4.jpg')}}" alt="fp4.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                <li class="list-inline-item"><a href="#">Featured</a></li>
                                            </ul>
                                            <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                            <h4 class="posr color-white">Renovated Apartment</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feat_property home7 agent">
                                    <div class="thumb">
                                        <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp5.jpg')}}" alt="fp5.jpg">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">For Rent</a></li>
                                                <li class="list-inline-item"><a href="#">Featured</a></li>
                                            </ul>
                                            <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                            <h4 class="posr color-white">Renovated Apartment</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="terms_condition_widget">
                        <h4 class="title">Categories Property</h4>
                        <div class="widget_list">
                            <ul class="list_details">
                                <li><a href="#"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-right">6 properties</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">12 properties</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">8 properties</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">26 properties</span></a></li>
                                <li><a href="#"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">89 properties</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_feature_listing">
                        <h4 class="title">Recently Viewed</h4>
                        <div class="media">
                            <img class="align-self-start mr-3" src="{{ asset('public/luanvan/images/blog/fls1.jpg')}}" alt="fls1.jpg">
                            <div class="media-body">
                                <h5 class="mt-0 post_title">Nice Room With View</h5>
                                <a href="#">$13,000/<small>/mo</small></a>
                                <ul class="mb0">
                                    <li class="list-inline-item">Beds: 4</li>
                                    <li class="list-inline-item">Baths: 2</li>
                                    <li class="list-inline-item">Sq Ft: 5280</li>
                                </ul>
                            </div>
                        </div>
                        <div class="media">
                            <img class="align-self-start mr-3" src="{{ asset('public/luanvan/images/blog/fls2.jpg')}}" alt="fls2.jpg">
                            <div class="media-body">
                                <h5 class="mt-0 post_title">Villa called Archangel</h5>
                                <a href="#">$13,000<small>/mo</small></a>
                                <ul class="mb0">
                                    <li class="list-inline-item">Beds: 4</li>
                                    <li class="list-inline-item">Baths: 2</li>
                                    <li class="list-inline-item">Sq Ft: 5280</li>
                                </ul>
                            </div>
                        </div>
                        <div class="media">
                            <img class="align-self-start mr-3" src="{{ asset('public/luanvan/images/blog/fls3.jpg')}}" alt="fls3.jpg">
                            <div class="media-body">
                                <h5 class="mt-0 post_title">Sunset Studio</h5>
                                <a href="#">$13,000<small>/mo</small></a>
                                <ul class="mb0">
                                    <li class="list-inline-item">Beds: 4</li>
                                    <li class="list-inline-item">Baths: 2</li>
                                    <li class="list-inline-item">Sq Ft: 5280</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  --}}
                <div class="col-md-12 col-lg-12 mt50">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="mt30 mb30">Similar Properties</h4>
                        </div>
                        <div class="col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp1.jpg')}}" alt="fp1.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                        <ul class="icon mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                        </ul>
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p class="text-thm">Apartment</p>
                                        <h4>Renovated Apartment</h4>
                                        <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
                                            <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                        </ul>
                                        <div class="fp_pdate float-right">4 years ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp2.jpg')}}" alt="fp2.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                        </ul>
                                        <ul class="icon mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                        </ul>
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p class="text-thm">Apartment</p>
                                        <h4>Renovated Apartment</h4>
                                        <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                                            <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                        </ul>
                                        <div class="fp_pdate float-right">4 years ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp3.jpg')}}" alt="fp3.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Sale</a></li>
                                        </ul>
                                        <ul class="icon mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                        </ul>
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p class="text-thm">Apartment</p>
                                        <h4>Renovated Apartment</h4>
                                        <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                                            <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                        </ul>
                                        <div class="fp_pdate float-right">4 years ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp1.jpg')}}" alt="fp1.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                        <ul class="icon mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                        </ul>
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p class="text-thm">Apartment</p>
                                        <h4>Renovated Apartment</h4>
                                        <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                                            <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                        </ul>
                                        <div class="fp_pdate float-right">4 years ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp3.jpg')}}" alt="fp3.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Sale</a></li>
                                        </ul>
                                        <ul class="icon mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                        </ul>
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p class="text-thm">Apartment</p>
                                        <h4>Renovated Apartment</h4>
                                        <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                                            <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                        </ul>
                                        <div class="fp_pdate float-right">4 years ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp1.jpg')}}" alt="fp1.jpg">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                        <ul class="icon mb0">
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-transfer-1"></span></a></li>
                                            <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                        </ul>
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p class="text-thm">Apartment</p>
                                        <h4>Renovated Apartment</h4>
                                        <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                    <div class="fp_footer">
                                        <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img src="images/property/pposter1.png" alt="pposter1.png"></a></li>
                                            <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                        </ul>
                                        <div class="fp_pdate float-right">4 years ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('luanvan.footer')
    @section('loadbantin')
    <script type="text/javascript" src="{{ asset('public/luanvan/js/isotop.js')}}"></script> 
    @endsection
    <script src="{{asset('public/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/toastr/toastr.min.js')}}" ></script>
       
    {!! Toastr::message() !!}
    
    
    <script async defer 
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize">
    </script>

        
    <script>
        var lat = {{ $bantin->bds->vido}};
        var lng = {{ $bantin->bds->kinhdo }};

        x = navigator.geolocation; // khai bao để lấy ra vị trí
        x.getCurrentPosition(success, failure);
        // lấy ra vị trí hiện tại
        function success(position)
        {
            var myLat = position.coords.latitude;
            //console.log(myLat); // lấy ra vị trí lat
            var myLong = position.coords.longitude;
            //console.log(myLong); // lấy ra vị trí long
            var coords = new google.maps.LatLng(myLat,myLong);
            // gôm lat va long lại
            var hi2 = new google.maps.LatLng(lat,lng);
            //khai báo
            var directionsDisplay = new google.maps.DirectionsRenderer(); 
            var directionsService = new google.maps.DirectionsService(); 
            var map;
            
            // lấy ra vị trí hiện tại
            var a = new google.maps.LatLng(myLat, myLong);
            // lấy vị trí của địa điểm trên csdl
            var b = new google.maps.LatLng(lat, lng);

            var mapOptions = {
                zoom: 18,
                minZoom: 6,
                maxZoom: 18,
                zoomControl:true,
                zoomControlOptions: {
                    style:google.maps.ZoomControlStyle.DEFAULT
                },
                // hiện thị ở giưa vị trí hiện tại
                center: hi2,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                panControl:false,
                mapTypeControl:false,
                scaleControl:false,
                overviewMapControl:false,
                rotateControl:false

            };
            // hiện bản đồ
            map = new google.maps.Map(document.getElementById('map'),mapOptions);
            // hai diem
            addMarker1({banhbao: coords});
            addMarker2({banhbao: hi2});
            
            // hiện thị đường đi tới 2 điểm trong bản đồ
            directionsDisplay.setMap(map);
            // khai báo đường đi từ a -> b phương tiện xe
            function calculateRoute(){
                var request = {
                    origin: a,
                    destination: b,
                    travelMode: 'DRIVING'
                };

                directionsService.route(request, function(result, status){
                    // console.log(result, status);
                    if(status == "OK"){
                        // lấy ra khoảng cách và thời gian
                        $("#khoangcach").html("<div class='result-table'>" + result.routes[0].legs[0].distance.text + "</div>");
                        $("#thoigian").html("<div class='result-table'>" + result.routes[0].legs[0].duration.text + "</div>");
                        // hiện thị kết quả trên bảng đồ 2 điểm và khoang cách & time
                        directionsDisplay.setDirections(result);
                    }
                });
            }
            // click vào nút button để chạy
            document.getElementById('get').onclick= function(){
                calculateRoute();
            }

            function addMarker1(props)
            {
                var marker = new google.maps.Marker({
                    position: props.banhbao,
                    map:map,
                    icon: '{{ asset('public/user.png') }}'
                });
                
            }

            function addMarker2(props)
            {
                var marker = new google.maps.Marker({
                    position: props.banhbao,
                    map:map,
                    icon: '{{ asset('public/map.png') }}'
                });
                
            }


        }
        function failure()
        {

        }
    </script>

    <script src="{{ asset('public/rateyo/jquery.rateyo.min.js') }}"></script>

    <script>
        $("#rateYo").rateYo({
            numStars: 5,
            starWidth: "25px",
            spacing: "5px",
            readOnly: true,

        });

        $("#show_rateyo").rateYo({
            numStars: 5,
            starWidth: "25px",
            spacing: "5px",
            readOnly: true,

        });
        
        $("#insect_rateyo").rateYo({
            spacing: "5px",
            fullStar: true
        });

        $("#insect_rateyo").rateYo()
          .on("rateyo.change", function (e, data) {
            //rateyo.change ko thay doi dc
            var rating2 = data.rating;
            
            $("#rating_insect").val(rating2);
        });
    </script>  

@endsection
