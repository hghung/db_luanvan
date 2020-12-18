<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    @yield('chatonline')
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


@if (!View::hasSection('chatonline'))
<script type="text/javascript" src="{{ asset('public/luanvan/js/jquery-3.3.1.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/jquery-migrate-3.0.0.min.js') }}"></script>
@endif
{{--  start calendar  --}}
@yield('calendar')
{{--  end calendar  --}}
<script type="text/javascript" src="{{ asset('public/luanvan/js/popper.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/jquery.mmenu.all.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/ace-responsive-menu.js') }}"></script>

@yield('chart')

<script type="text/javascript" src="{{ asset('public/luanvan/js/bootstrap-select.min.js') }}"></script>

@yield('loadbantin')

<script type="text/javascript" src="{{ asset('public/luanvan/js/snackbar.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/simplebar.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/parallax.js') }}"></script>

@if (!View::hasSection('chatonline') && !View::hasSection('calendar'))
<script type="text/javascript" src="{{ asset('public/luanvan/js/scrollto.js') }}"></script>
@endif

<script type="text/javascript" src="{{ asset('public/luanvan/js/jquery-scrolltofixed-min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/jquery.counterup.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/wow.min.js') }}"></script>

@if (!View::hasSection('chatonline'))

<script type="text/javascript" src="{{ asset('public/luanvan/js/progressbar.js')}}"></script> 
@endif

<script type="text/javascript" src="{{ asset('public/luanvan/js/slider.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/timepicker.js') }}"></script>

<!-- Custom script for all pages --> 
<script type="text/javascript" src="{{ asset('public/luanvan/js/script.js')}}"></script>

<script type="text/javascript" src="{{ asset('public/luanvan/js/dashboard-script.js')}}"></script>


</body>

</html>