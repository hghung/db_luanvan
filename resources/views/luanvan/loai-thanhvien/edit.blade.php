@extends('luanvan.master')
@section('title','Dashbord')
@section('header-account')
style2 menu-fixed main-menu
@endsection

@section('content')
    @include('luanvan.tai-khoan.header-left')
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <style>
        .error{ color:red !important; } 
    </style>

    <section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						
						<div class="col-lg-12 " style="height: 100px !important">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Thêm vai trò</h2>
								<p>Chúng tôi rất vui khi gặp bạn!</p>
							</div>
						</div>
						<div class="col-lg-12">
                            <form class="form" method="POST"  action="{{ route('loaithanhvien.edit.post',['id' => $medal->id]) }}" enctype="multipart/form-data"> 
                            {{ csrf_field() }}
                                <div class="my_dashboard_review">
                                    <div class="row">
                                        
                                        <div class="col-xl-10">
                                            <div class="row">
                                                {{--  logo  --}}
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label for="formGroupExampleInput1">Loại thành viên</label>
                                                        <input type="text" class="form-control" name="loaithanhvien" value="{{ $medal->loai_thanhvien }}" >
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label for="formGroupExampleInput1">Upload Logo</label>
                                                        <input type="file" class="form-control" name="logo" >
                                                        <p>*kích thước 32px x 32px</p>

                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="my_profile_setting_input form-group" style="margin-bottom: 0px !important;">
                                                        @if($medal->logo)
                                                        <label for="formGroupExampleInput1">Logo</label>
                                                        <br>
                                                            <img src="{{ asset($medal->logo) }}" style="width: 50px; height:50px; margin-bottom: 20px;" alt="">
                                                        @endif

                                                    </div>
                                                </div>
                                                {{--    --}}
                                                <div class="col-xl-12">
                                                    <div class="my_profile_setting_input">
                                                        <button class="btn btn1 float-left">
                                                            <a href="{{ route('loaithanhvien.list') }}">
                                                            Quay lại
                                                            </a>
                                                        </button>
                                                        
                                                        <button style="submit" class="btn btn2 float-right">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
    </section>
    
    
       

@endsection