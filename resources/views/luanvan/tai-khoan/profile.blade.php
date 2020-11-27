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
								<h2 class="breadcrumb_title">My Profile</h2>
								<p>Chúng tôi rất vui khi gặp bạn!</p>
							</div>
						</div>
						<div class="col-lg-12">
                            <form class="form" method="POST"  action="{{ route('taikhoan.profile.update') }}" enctype="multipart/form-data"> 
                            {{ csrf_field() }}
                                <div class="my_dashboard_review">
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <h4>Avatar</h4>
                                        </div>
                                        <div class="col-xl-10">
                                            <div class="row">
                                                {{--  avatar  --}}
                                                <div class="col-lg-12">
                                                    <div class="wrap-custom-file">
                                                        <input type="file" name="avatar" id="image1" accept=".gif, .jpg, .png"/>
                                                        @if(Auth::user()->avatar)
                                                        <label for="image1"  style="background-image: url({{ asset(Auth::user()->avatar) }}); width:260px; height:252px;">
                                                        @else
                                                        <label for="image1"  style="background-image: url({{ asset('public/luanvan/avatar_profile.png') }});">
                                                        @endif
                                                            <span><i class="flaticon-download"></i> Upload avatar </span>
                                                        </label>
                                                    </div>
                                                    <p>*minimum 260px x 260px</p>
                                                </div>
                                                
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label for="formGroupExampleInput1">Username</label>
                                                        <input type="text" class="form-control" value="{{ Auth::user()->username }}" disabled="" style="background-color: rgba(46, 37, 37, 0.301)!important">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label >Email</label>
                                                        <input type="email" class="form-control" value="{{ Auth::user()->email }}" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label >Họ</label>
                                                        <input type="text" name="ho" class="form-control" 
                                                        placeholder="Vui lòng nhập họ"
                                                        @if(Auth::user()->ho)
                                                        value="{{ Auth::user()->ho }}" 
                                                        @endif >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label >Tên</label>
                                                        <input type="text" name="ten" class="form-control" placeholder="Vui lòng nhập tên"
                                                        @if(Auth::user()->ten)
                                                        value="{{ Auth::user()->ten }}" 
                                                        @endif >
                                                    </div>
                                                </div>
                                                {{--    --}}

                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label >Số điện thoại</label>
                                                        <input type="text" class="form-control" name="phone" placeholder="Vui lòng nhập số điện thoại"
                                                        @if(Auth::user()->dien_thoai)
                                                        value="0{{ Auth::user()->dien_thoai }}" 
                                                        @endif>
                                                    </div>
                                                </div>
                                                {{--    --}}
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label >Ngày sinh</label>
                                                        <input type="date" class="form-control" name="ngaysinh"
                                                        @if(Auth::user()->ngay_sinh)
                                                        value="{{ Auth::user()->ngay_sinh }}" 
                                                        @endif>
                                                    </div>
                                                </div>
                                                
                                                {{--    --}}
                                                <div class="col-lg-7 col-xl-7 row">
                                                    <div class="my_profile_setting_input form-group col-md-11">
                                                        <label >Giới tính</label>
                                                        <div class="row" style="margin-top: 10px;">
                                                            <div class="radio col-md-6">
                                                                <input name="gioitinh" type="radio" value="1" @if(Auth::user()->gioi_tinh == 1)
                                                                {{"checked"}}
                                                                @endif>
                                                                <label for="radio_one" style="margin-left: 10px;">
                                                                    <span class="radio-label"></span> 
                                                                    Nam
                                                                </label>
                                                            </div>
                                                            <div class="radio col-md-6">
                                                                <input  name="gioitinh" type="radio" value="2" @if(Auth::user()->gioi_tinh == 2)
                                                                {{"checked"}}
                                                                @endif>
                                                                <label for="radio_one" style="margin-left: 10px;">
                                                                    <span class="radio-label"></span> 
                                                                    Nữ
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--    --}}
                                            
                                                <div class="ui_kit_select_search col-lg-6 col-xl-6" style="margin-bottom: 25px" id="a" data="{{route('ajax.quanhuyen',0)}}"​ >
                                                    <h5>Tỉnh - Thành phố</h5>
                                                    <select class="selectpicker" data-live-search="true" data-width="100%" id="tinhthanh" name="tinhthanh">
                                                        @if(Auth::user()->phuongxa)
                                                            @foreach($province as $tp)
                                                                <option 
                                                                @if(Auth::user()->phuongxa->quanhuyen->tinhthanh->id == $tp->id)
                                                                    {{"selected"}}
                                                                @endif
                                                                value={{ $tp->id  }} >{{ $tp->province_name }}</option>
                                                            @endforeach
                                                        @else
                                                            <option>
                                                                Chọn tỉnh - thành phố 
                                                            </option>
                                                            @foreach($province as $tp)
                                                                <option value={{ $tp->id  }} >
                                                                    {{ $tp->province_name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="ui_kit_select_search col-lg-6 col-xl-6" id="b" data1="{{route('ajax.phuongxa',0)}}">
                                                    <h5>Quận - Huyện</h5>
                                                    <select class="selectpicker" data-live-search="true" data-width="100%" id="quanhuyen" name="quanhuyen">
                                                        
                                                        @if(Auth::user()->phuongxa)
                                                            @foreach($district as $qh)
                                                                <option
                                                                @if(Auth::user()->phuongxa->quanhuyen->id == $qh->id)
                                                                    {{"selected"}}
                                                                @endif
                                                                value={{ $qh->id  }} >{{ $qh->district_prefix }} {{ $qh->district_name }}</option>
                                                            @endforeach
                                                        @else
                                                            <option >
                                                                Chọn quận - huyện
                                                            </option>
                                                            @foreach($district as $qh)
                                                                <option value={{ $qh->id  }} >
                                                                    {{ $qh->district_prefix }} {{ $qh->district_name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                        
                                                    </select>
                                                </div>

                                                <div class="ui_kit_select_search col-lg-6 col-xl-6" style="margin-bottom: 25px">
                                                    <h5>Phường - Xã</h5>
                                                    <select class="selectpicker"    data-live-search="true" data-width="100%" id="phuongxa" name="phuongxa" >
                                                        @if(Auth::user()->phuongxa)
                                                            @foreach($ward as $px)
                                                                <option 
                                                                    @if(Auth::user()->id_phuongxa == $px->id)
                                                                        {{"selected"}}
                                                                    @endif
                                                                    value={{ $px->id  }} >
                                                                    {{ $px->ward_prefix }} {{ $px->ward_name }}
                                                                </option>
                                                            @endforeach
                                                        @else
                                                            <option >Chọn phường - xã</option>
                                                            @foreach($ward as $px)
                                                                <option value={{ $px->id  }} >
                                                                    {{ $px->ward_prefix }} {{ $px->ward_name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                        
                                                    </select>
                                                </div>
                                                
                                                <div class="col-xl-12">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label >Địa chỉ </label>
                                                        <input type="text" class="form-control" name="diachi" placeholder="Vui lòng nhập địa chỉ"
                                                        @if(Auth::user()->dia_chi)
                                                        value="{{ Auth::user()->dia_chi }}" 
                                                        @endif>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="my_profile_setting_textarea">
                                                        <label >Giơi thiệu bản thân</label>
                                                        <textarea class="form-control" name="gioithieu" rows="7" placeholder="Giới thiệu về bản thân của mình"
                                                        @if(Auth::user()->gioi_thieu)
                                                        value="{{ Auth::user()->gioi_thieu }}" 
                                                        @endif> {{ Auth::user()->gioi_thieu }} </textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 text-right">
                                                    <div class="my_profile_setting_input">
                                                        <button class="btn btn2">Update Profile</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                            {{--  2  --}}
							<div class="my_dashboard_review mt30">
								<div class="row">
									<div class="col-xl-2">
										<h4>Social Media</h4>
									</div>
									<div class="col-xl-10">
										<div class="row">
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label >Skype</label>
											    	<input type="text" class="form-control" id="formGroupExampleSkype" placeholder="alitfn">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label >Website</label>
											    	<input type="text" class="form-control" id="formGroupExampleWebsite" placeholder="creativelayers@gmail.com">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label >Facebook</label>
											    	<input type="text" class="form-control" id="formGroupExampleFaceBook">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label >Twitter</label>
											    	<input type="text" class="form-control" id="formGroupExampleTwitter">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label >Linkedin</label>
											    	<input type="text" class="form-control" id="formGroupExampleLinkedin">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label >Instagram</label>
											    	<input type="text" class="form-control" id="formGroupExampleInstagram">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label >Google Plus</label>
											    	<input type="text" class="form-control" id="formGroupExampleGooglePlus">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label >Youtube</label>
											    	<input type="text" class="form-control" id="formGroupExampleYoutube">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label >Pinterest</label>
											    	<input type="text" class="form-control" id="formGroupExamplePinterest">
												</div>
											</div>
											<div class="col-lg-6 col-xl-6">
												<div class="my_profile_setting_input form-group">
											    	<label >Vimeo</label>
											    	<input type="text" class="form-control" id="formGroupExampleVimeo">
												</div>
											</div>
											<div class="col-xl-12 text-right">
												<div class="my_profile_setting_input">
													<button class="btn btn2">Update Profile</button>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </div>
                            {{--    --}}
                            

							<div class="my_dashboard_review mt30" style="width: 100%;">
								<div class="row">
                                    

									<div class="col-xl-2">
										<h4>Thay đổi mât khẩu</h4>
                                    </div>
                                    <div class="col-xl-10">
                                        <form id="doimatkhau" method="post" action="javascript:void(0)" style="width:100%">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label >Mât khẩu cũ</label>
                                                        <input type="password" name="matkhaucu" class="form-control" id="matkhaucu" >
                                                        <span class="text-danger">{{ $errors->first('matkhaucu') }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label >Mât khẩu mới</label>
                                                        <input type="password" name="password_new" class="form-control" id="password_new" >
                                                        <span class="text-danger">{{ $errors->first('password_new') }}</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label >Nhập lại mât khẩu mới</label>
                                                        <input type="password" name="prepassword_new" class="form-control" id="prepassword_new" >
                                                        <span class="text-danger">{{ $errors->first('prepassword_new') }}</span>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="my_profile_setting_input float-left fn-520">
                                                        <div class="alert alert-success d-none" id="hide2">
                                                            <span id="thongbao"></span>
                                                        </div>
                                                    </div>
                                                    <div class="my_profile_setting_input float-right fn-520">
                                                        <button id="gui_form" class="btn btn2">Update Profile</button>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </form>
                                    </div>
								</div>
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
       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            // console.log($this);
            // alert('chạy được');

            var y = $('#a').attr('data');
            console.log(y);
            var x = $('#b').attr('data1');
            console.log(x);
            //kiểm tra xem coi nó chạy không
            $("#tinhthanh").change(function(){
                // var url = $(this).attr('data-url');
                // var url =x;
                // "/nien-luan-bookshop/tai-khoan/quan-huyen/";
                var id_province = $(this).val();
                // alert(id_province);
                // kiểm tra xem có chạy được nhận id option của loaibaiban không

                $.get(y+id_province,function(data){
                    // alert(data);
                    $("#quanhuyen").html(data);
                    $('#quanhuyen').selectpicker('refresh');
                    // phải câu lênh selectpicker('refresh') để ko bị lỗi boostrap-selecet
                });
            });

            $("#quanhuyen").change(function(){
                var id_ward = $(this).val();

                // kiểm tra xem có chạy được nhận id option của loaibaiban không
                $.get(x+id_ward,function(data){
                    // alert(data);
                    $("#phuongxa").html(data);
                    $('#phuongxa').selectpicker('refresh');
                    // phải câu lênh selectpicker('refresh') để ko bị lỗi boostrap-selecet
                });
            });


        });
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script>
        if ($("#doimatkhau").length > 0) {
            $("#doimatkhau").validate({
                rules: {
                    password_new: {
                        required: true,
                        maxlength: 50
                    },

                    prepassword_new: {
                        required: true,
                        equalTo: '#password_new',
                        maxlength: 50
                    },
        
                    matkhaucu: {
                        required: true,
                        remote: {
							url: "{{ route('check.password') }}",
							type: "post",
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							data: {
								matkhaucu: function () {
									return $("input[name='matkhaucu']").val();
								}
							},
							dataFilter: function (data) {
                                var json = JSON.parse(data);
								if (json.msg == "true") {
                                    return "\"" + "Mật khẩu không khớp" + "\"";
                                } else {
                                    return 'true';
                                }
                            }
						}
                        
                    },    
                },
        
                messages: {
                    password_new: {
                        required: "Vui lòng nhập mật khẩu"
                    },
    
                    prepassword_new: {
                        required: "Vui lòng nhập lại mật khẩu",
                        equalTo: "Mật khẩu nhập lại không khớp"
                    },
    
                    matkhaucu: {
                        required: "Vui lòng nhập mật khẩu củ"
                    },
    
                },
        
                submitHandler: function(form) {
            
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
    
                    $('#gui_form').html('Sending..');
                    $.ajax({
                        url: '{{ route('taikhoan.profile.matkhau.update') }}' ,
                        type: "POST",
                        data: $('#doimatkhau').serialize(),
                        success: function( response ) {
                            $('#gui_form').html('Submit');
                            $('#thongbao').show();
                            $('#thongbao').html(response.msg);
                            $('#hide2').removeClass('d-none');
                            document.getElementById("doimatkhau").reset(); 
                            setTimeout(function(){
                            $('#thongbao').hide();
                            $('#hide2').hide();
                            },3000);
                
                        }
                
                    });
            
                }
        
            })
     
        }
    </script>

    

@endsection