<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
    <meta name="description" content="FindHouse - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('public/luanvan/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/luanvan/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('public/luanvan/css/responsive.css') }}">
    <!-- Title -->
    <title>NTKD | @yield('title')</title>
    <!-- Favicon -->
    <link href="{{ asset('public/luanvan/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('public/luanvan/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
</head>
<body>
<div class="wrapper">
    <div class="preloader"></div>

    @include('luanvan.header')

    @yield('content')
    



    <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/jquery-3.3.1.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/jquery-migrate-3.0.0.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/popper.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/jquery.mmenu.all.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/ace-responsive-menu.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/chart.min.js')}}"></script> 

<script type="text/javascript" src="{{ asset('public/luanvan/js/chart-custome.js')}}"></script> 

<script type="text/javascript" src="{{ asset('public/luanvan/js/bootstrap-select.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/isotop.js')}}"></script> 


<script type="text/javascript" src="{{ asset('public/luanvan/js/snackbar.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/simplebar.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/parallax.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/scrollto.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/jquery-scrolltofixed-min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/jquery.counterup.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/wow.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/progressbar.js')}}"></script> 


<script type="text/javascript" src="{{ asset('public/luanvan/js/slider.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/timepicker.js') }}"></script>

<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{ asset('public/luanvan/js/script.js')}}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/dashboard-script.js')}}"></script>


</body>

<!-- Mirrored from grandetest.com/theme/findhouse-html/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2020 10:00:58 GMT -->
</html>