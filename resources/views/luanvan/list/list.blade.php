@extends('luanvan.master')
@section('title','Danh sách bảng tin')
@section('header')
style2  navbar-scrolltofixed stricky main-menu
@endsection
@section('content')
<section class="home-two p0">
    <div class="container-fluid p0">
        <div class="row">
            <div class="col-lg-12">
                <div class="home_two_map">
                    <style>
                        #map
                        {
                            width: 1700px;
                            height: 600px;
                        }
                    </style>

                    <div id="map">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="feature-property" class="our-listing bgc-f7 pb30-991">
    <div class="container">
        {{--  2  --}}
        <div class="row">
            <div class="col-sm-12">
                <div class="listing_sidebar">
                    <div class="sidebar_content_details style3">
                        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
                        <div class="sidebar_listing_list style2 mb0">
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
            <div class="col-md-8 col-lg-6">
                <div class="breadcrumb_content style2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home1') }}">Home</a></li>
                        <li class="breadcrumb-item active text-thm" aria-current="page">Danh sách bảng tin</li>
                    </ol>
                    <h2 class="breadcrumb_title">Danh sách bảng tin</h2>
                </div>
            </div>
            <div class="col-md-4 col-lg-6">
                <div class="sidebar_switch text-right">
                    <div id="main2">
                        <span id="open2" class="flaticon-filter-results-button filter_open_btn"> Hiện thị bộ lọc</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="grid_list_search_result style2">
                        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3">
                            <div class="left_area">
                                <p>9 Bảng tin</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8 col-lg-9 col-xl-9">
                            <div class="right_area style2 text-right">
                                <ul>
                                    <li class="list-inline-item"><span class="shrtby">Sắp xếp:</span>
                                        <select class="selectpicker show-tick">
                                            <option>Featured First</option>
                                            <option>Featured 2nd</option>
                                            <option>Featured 3rd</option>
                                            <option>Featured 4th</option>
                                            <option>Featured 5th</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($bantin as $bantin2)
                    <div class="col-md-6 col-lg-4">
                        <div class="feat_property home7 style4">
                            <div class="thumb">
                                <div class="fp_single_item_slider">
                                    <div class="item">
                                        <img class="img-whp" src="{{ asset($bantin2->bds->path_hinh)}}" alt="fp1.jpg')}}">
                                    </div>
                                    <div class="item">
                                        <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp2.jpg')}}" alt="fp2.jpg')}}">
                                    </div>
                                </div>
                                <div class="thmb_cntnt style2">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="#">{{ $bantin2->hinhthuc->ten_hinhthuc }}</a></li>
                                        <li class="list-inline-item"><a href="#">Featured</a></li>
                                    </ul>
                                </div>
                                <div class="thmb_cntnt style3">
                                    <ul class="icon mb0">
                                        <li class="list-inline-item"><a href="{{Route('compare.add',['id' => $bantin2->id])}}"><span class="flaticon-transfer-1"></span></a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                                    </ul>
                                    <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p class="text-thm">{{ $bantin2->bds->loaibds->ten_loaiBDS }}</p>
                                    <a href="{{ route('single',['slug' => $bantin2->slug]) }}">
                                        <h4>{{ $bantin2->tieu_de }}</h4>
                                    </a>
                                    <p><span class="flaticon-placeholder"></span> {{ $bantin2->bds->dia_chi }}</p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
                                        <li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
                                        <li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
                                    </ul>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png')}}" alt="pposter1.png')}}"></a></li>
                                        <li class="list-inline-item"><a href="#">{{ $bantin2->user->ho }} {{ $bantin2->user->ten }}</a></li>
                                    </ul>
                                    <div class="fp_pdate float-right">{{ $bantin2->created_at->diffForHumans() }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-6 col-lg-4">
                        <div class="feat_property home7 style4">
                            <div class="thumb">
                                <div class="fp_single_item_slider">
                                    <div class="item">
                                        <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp1.jpg')}}" alt="fp1.jpg')}}">
                                    </div>
                                    <div class="item">
                                        <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp2.jpg')}}" alt="fp2.jpg')}}">
                                    </div>
                                </div>
                                <div class="thmb_cntnt style2">
                                    <ul class="tag mb0">
                                        <li class="list-inline-item"><a href="#">For Rent</a></li>
                                        <li class="list-inline-item"><a href="#">Featured</a></li>
                                    </ul>
                                </div>
                                <div class="thmb_cntnt style3">
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
                                    <a href="#">
                                        <h4>Renovated Apartment</h4>
                                    </a>
                                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
                                    <ul class="prop_details mb0">
                                        <li class="list-inline-item"><a class="text-thm3" href="#">Beds: 4</a></li>
                                        <li class="list-inline-item"><a class="text-thm3" href="#">Baths: 2</a></li>
                                        <li class="list-inline-item"><a class="text-thm3" href="#">Sq Ft: 5280</a></li>
                                    </ul>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png')}}" alt="pposter1.png')}}"></a></li>
                                        <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                                    </ul>
                                    <div class="fp_pdate float-right">4 years ago</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    
                    <div class="col-lg-12 mt20">
                        <div class="mbp_pagination">
                            <ul class="page_navigation">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
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

@include('luanvan.footer')
    <script src="{{asset('public/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/toastr/toastr.min.js')}}" ></script>
           
   	{!! Toastr::message() !!}


    <script async defer 
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize">
    </script>

    
    <script defer>


        function initialize() {
            var mapOptions = {
                zoom: 6,
                minZoom: 6,
                maxZoom: 17,
                zoomControl:true,
                zoomControlOptions: {
                    style:google.maps.ZoomControlStyle.DEFAULT
                },
                center: new google.maps.LatLng(16.0471659, 108.1716864),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                panControl:false,
                mapTypeControl:false,
                scaleControl:false,
                overviewMapControl:false,
                rotateControl:false
            }

            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            //addMarker({banhbao: {lat: 10.0266048,lng: 105.7767294}});
            //addMarker({banhbao: {lat: 10.0453833,lng: 105.7796137}});
            var y = $('#img').attr('data');
            @php 
                foreach($bantin as $nha)
                {
                    $batdongsan = $nha->bds;    
                    $ho = $nha->user->ho;
                    $ten = $nha->user->ten;
                    $link = route('single',['slug' => $nha->slug]);
                    $giatien = number_format($nha->gia_tien,0,',','.');
                    $path = asset($batdongsan->path_hinh);
                    $qrcode = asset($batdongsan->qrcode);
                    
                    echo'addMarker({banhbao: {lat: '.$batdongsan->vido.',lng: '.$batdongsan->kinhdo.'},';
                    echo "content: '<div style=width:270px><div><img style=width:270px;height:151px; src=$path ></div><div class=row><div class=col-md-8><div style=margin-top:5px;margin-bottom:5px;>Tiêu đề: <a href=$link style=color:blue> $nha->tieu_de </a></div><div style=margin-top:5px;margin-bottom:5px;>Người bán: <a href=# style=color:#90c923>$ho $ten</a></div><div style=margin-top:5px;margin-bottom:5px;>Giá: <span style=color:red>$giatien</span> đ/tháng</div></div><div class=col-md-4><div ><img style=width:60px;height:60px; src=$qrcode ></div></div></div><div>Địa chỉ: $batdongsan->dia_chi</div></div> '});";
                    //muốn viêt dc model trong day phải khai bảng ở ngoài trước không nó sẽ lỗi
                    // style phải viet xác nhau mới nhận được
                    // viet lòng php không cần mở dây nhây kep nó tự hiệu
                    // muốn nhận đươc dấu nhây đơn '' tài phải echo dấu nhây kép ""
                }
            
                
            @endphp
        
            function addMarker(props)
            {
                var marker = new google.maps.Marker({
                    position: props.banhbao,
                    map:map,
                    icon: '{{ asset('public/map.png') }}'
                });
                if(props.content){
                    var infoWindow = new google.maps.InfoWindow({
                        content:props.content
                    });
                    marker.addListener('click',function(){
                        infoWindow.open(map, marker);
                    });
                }
            }
            
                
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        
    </script>
@endsection