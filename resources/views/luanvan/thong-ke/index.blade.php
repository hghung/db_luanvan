@extends('luanvan.master')
@section('title','Dashbord')
@section('header-account')
style2 menu-fixed main-menu
@endsection

@section('content')
    @include('luanvan.tai-khoan.header-left')
    <!-- Our Dashbord -->
    <section class="our-dashbord dashbord bgc-f7 pb50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
                <div class="col-lg-9 col-xl-10 maxw100flex-992">
                    <div class="row">
                        
                        <div class="col-lg-12 mb10">
                            <div class="breadcrumb_content style2">
                                <h2 class="breadcrumb_title">
                                    @if(Auth::user()->ten)
                                        @if(Auth::user()->gioi_tinh == 1)
                                            Xin chào, Anh {{ Auth::user()->ten }}!
                                        @elseif(Auth::user()->gioi_tinh == 2)
                                            Xin chào, Chị {{ Auth::user()->ten }}!
                                        @endif

                                    @elseif(!Auth::user()->ten)
                                        Xin chào, {{ Auth::user()->username }}!
                                    @endif
                                </h2>
                                <p>Chúng tôi rất vui được gặp lại bạn!</p>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="application_statics">
                                <h4>View Statistics</h4>
                                <div class="c_container"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('public/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/toastr/toastr.min.js')}}" ></script>
           
    {!! Toastr::message() !!}
    
    @section('chart')
    <script type="text/javascript" src="{{asset('public/luanvan/js/chart.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/luanvan/js/chart-custome.js')}}"></script>   
    @endsection
@endsection