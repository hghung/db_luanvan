@extends('luanvan.master')
@section('title','Dashbord')
@section('header-account')
style2 menu-fixed main-menu
@endsection
@section('chatonline')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('public/js/app.js') }}" defer></script>

@endsection

@section('content')
    @include('luanvan.tai-khoan.header-left')
    <section class="our-dashbord dashbord bgc-f7 pb50"  id="app">
			<main-app></main-app>
	</section>

@endsection


@if(Auth::check())
    <script>
        var authuser = @JSON(Auth::user())
    </script>
@endif