
	<!-- Main Header Nav -->
	<meta name="csrf-token" content="{{ csrf_token() }}"> 
	 {{--  không có chạy ko dc  --}}
	
	<header class="header-nav menu_style_home_one @yield('header') @yield('header-account')">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="{{ asset('public/luanvan/images/header-logo.png')}}" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="{{ route('home1') }}" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="{{ asset('public/luanvan/images/header-logo2.png')}}" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="{{ asset('public/luanvan/images/header-logo2.png')}}" alt="header-logo2.png">
		            <span>FindHouse</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
				
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            
					<li class="last">
		                <a href="{{ route('home1') }}"><span class="title">Trang chủ</span></a>
					</li>
					{{--  BDS bán  --}}
		            <li>
		                <a href="{{ route('list.1') }}"><span class="title">Bất động sản bán</span></a>
		                <!-- Level Two-->
	                	<ul>
		                    {{--  <li>
		                        <a href="#">Listing Grid</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-grid-v1.html">Grid v1</a></li>
		                        </ul>
		                    </li>  --}}
                            <li><a href="page-add-new-property.html">Create Listing</a></li>
	                	</ul>
					</li>
					{{--  BDS thuê  --}}
		            <li>
		                <a href="{{ route('list.1') }}"><span class="title">Bất động sản thuê</span></a>
		                <!-- Level Two-->
	                	<ul>
		                    {{--  <li>
		                        <a href="#">Listing Grid</a>
		                        <!-- Level Three-->
		                        <ul>
		                            <li><a href="page-listing-grid-v1.html">Grid v1</a></li>
		                        </ul>
		                    </li>  --}}
                            <li><a href="page-add-new-property.html">Create Listing</a></li>
	                	</ul>
					</li>
					{{--  Tin tức  --}}
		            <li class="last">
		                <a href="page-contact.html"><span class="title">Tin tức</span></a>
					</li>
					{{--  So sánh  --}}
					<li class="last">
		                <a href="{{ route('compare') }}"><span class="title">So sánh</span></a>
					</li>

		            <li class="last">
		                <a href="page-contact.html"><span class="title">Liên hệ</span></a>
					</li>

					{{--  hiện thị user khi đăng nhập & khi không đăng nhập  --}}
					@if(Auth::check())
					<li class="user_setting">
						<div class="dropdown">
							<a class="btn dropdown-toggle" href="#" data-toggle="dropdown">
								<img class="rounded-circle"
								@if(Auth::user()->avatar)
								src="{{ asset(Auth::user()->avatar)}}" 
								style="width: 45px; height:45px; border-radius: 50%;" 
								@else
								src="{{ asset('public/luanvan/avatar.png')}}" 
								@endif
								alt="e1.png"> 
								<span class="dn-1199">
									@if(Auth::user()->ten)
										{{ Auth::user()->ten }}
									@elseif(!Auth::user()->ten)
										{{ Auth::user()->username }}
									@endif
								</span>
							</a>

						    <div class="dropdown-menu">
						    	<div class="user_set_header" style="padding-bottom: 0px !important">
									<img class="float-left" 
									@if(Auth::user()->avatar)
									src="{{ asset(Auth::user()->avatar)}}" style="width: 50px; height:50px; border-radius: 50%;" 
									@else
									src="{{ asset('public/luanvan/avatar.png')}}" 
									@endif
									alt="e1.png">
									<p >
										@if(Auth::user()->ten)
											{{ Auth::user()->ten }}
										@elseif(!Auth::user()->ten)
											{{ Auth::user()->username }}
										@endif
										<br>
										<span class="address" style="padding-top: 20px !important;">
											<a href="#" style="color: #0ed468"  >
												<span >
													<img src="{{ asset(Auth::user()->loaithanhvien->logo) }}" alt="">
												</span>
												<span style="color:red">
													{{ Auth::user()->loaithanhvien->loai_thanhvien }}
												</span>
												-
												<span style="color:red">
													VIP
												</span>
											</a>
										</span>
									</p>
						    	</div>
						    	<div class="user_setting_content" style="padding-top: 0px !important;">
									<a class="dropdown-item active" href="{{ route('taikhoan.dashbord') }}" style="color: #555555">Quản lý tài khoản</a>
									<a class="dropdown-item" href="#" style="color: #555555">Tin nhắn</a>
									<a class="dropdown-item" href="#" style="color: #555555">Lịch sử thanh toán</a>
									
									<a class="dropdown-item" href="{{ route('dangxuat') }}" style="color: #555555">Đăng xuất</a>
						    	</div>
						    </div>
						</div>
					</li>
					@else
					<li class="list-inline-item list_s"><a href="#" class="btn flaticon-user" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="dn-lg">&nbspĐăng nhập</span></a></li>
					@endif

					@if(Auth::check())
					<li class="list-inline-item add_listing home6"><a href="{{ route('bantin.add') }}"><span class="flaticon-plus"></span><span class="dn-lg"> Đăng bảng tin</span></a></li>
					@endif
		        </ul>
		    </nav>
		</div>
	</header>

	<!-- Modal -->
	
	<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
		      	<div class="modal-body container pb20">
		      		<div class="row">
		      			<div class="col-lg-12">
				    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
							  	<li class="nav-item">
							    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Đăng nhập</a>
							  	</li>
							  	<li class="nav-item">
							    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Đăng ký</a>
							  	</li>
							</ul>
		      			</div>
					  </div>
					  
					{{--  //xử lý backend   --}}
					<div class="tab-content container" id="myTabContent">
						{{--  // xử lý đăng nhâp  --}}
					  	<div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="login_thumb">
					  				<img class="img-fluid w100" src="{{ asset('public/luanvan/images/resource/login.jpg')}}" alt="login.jpg">
					  			</div>
							</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="login_form">
									<form method="post" action="{{ route('post.login') }}">
									{{ csrf_field() }}
										<div class="heading">
											<h4>Đăng nhập</h4>
										</div>
										
										<div class="row mt25">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-fb btn-block"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
											</div>
										</div>
										<hr>
										{{--    --}}
										<div class="input-group mb-2 mr-sm-2">

											<input type="text" class="form-control" name="username" placeholder="Nhập username">

											<div class="input-group-prepend">
												<div class="input-group-text"><i class="flaticon-user"></i></div>
											</div>

										</div>
										<div class="input-group form-group">
											<input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
											<div class="input-group-prepend">
												<div class="input-group-text"><i class="flaticon-password"></i></div>
											</div>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck1">
											<label class="custom-control-label" for="exampleCheck1">Ghi nhớ</label>
											<a class="btn-fpswd float-right" href="#">Quên mật khẩu?</a>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Đăng nhập</button>
										<p class="text-center">Bạn chưa có tài khoản? <a class="text-thm" href="#">Đăng ký</a></p>
									</form>
								</div>
					  		</div>
						</div>

						{{--  // xử lý đăng ký  --}}
					  	<div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="regstr_thumb">
					  				<img class="img-fluid w100" style="height: 600px !important;" src="{{ asset('public/luanvan/images/resource/regstr.jpg')}}" alt="regstr.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="sign_up_form">
									<style>
										.error{ color:red; } 
									</style>
									<div class="alert alert-success d-none" id="msg_div">
										<span id="res_message"></span>
									</div>
									<form id="contact_us" method="post" action="javascript:void(0)">

										{{ csrf_field() }}

										{{--  // API để đó chưa xử lý  --}}
										
										<div class="row">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
											</div>
										</div>
										<hr>
										{{--  // xử lý  --}}
										
										<div class="form-group ">
											{{--  //fix loi name="taikhoan"  --}}
											<input type="text" name="taikhoan" class="form-control" id="taikhoan" placeholder="Vui lòng nhập Username" >
											<span class="text-danger">{{ $errors->first('taikhoan') }}</span>
											
										</div>
											
										<div class="form-group ">

											<input type="email" id="email" name="email" class="form-control" placeholder="Vui lòng nhập email">
											<span class="text-danger">{{ $errors->first('email') }}</span>
											
										</div>

										
										<div class="form-group ">

											<input type="password" name="password" class="form-control" id="password" placeholder="Vui lòng nhập mật khẩu" >
											<span class="text-danger">{{ $errors->first('password') }}</span>
											
										</div>
										<div class="form-group ">

											<input type="password" name="prepassword" class="form-control" id="prepassword" placeholder="Vui lòng nhập lai mật khẩu" >
											<span class="text-danger">{{ $errors->first('prepassword') }}</span>

										</div>

										<div class="form-group ui_kit_select_search mb0">
											<select class="selectpicker" data-live-search="true" data-width="100%" name="vaitro">
												<option data-tokens="SelectRole" value="3" >Một người</option>
												<option value="4" data-tokens="Agent/Agency">Đại lý</option>
											</select>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" name="checkbox" class="custom-control-input" id="exampleCheck2">
											<label class="custom-control-label" for="exampleCheck2">Tôi chấp nhận Điều khoản và Chính Sách Bảo mật?</label>
										</div>

										<button type="submit" class="btn btn-log btn-block btn-thm" id="send_form">Đăng ký</button>
										
									</form>
								</div>
					  		</div>
					  	</div>
					</div>
		      	</div>
		    </div>
		</div>
	</div>

	
	
	
	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    
	<script>
		if ($("#contact_us").length > 0) {
		  	$("#contact_us").validate({
				rules: {
					taikhoan: {
						required: true,
						maxlength: 30,
						remote: {
							url: "{{ route('check.username') }}",
							type: "post",
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							data: {
								taikhoan: function () {
									return $("input[name='taikhoan']").val();
								}
							},
							dataFilter: function (data) {
								var json = JSON.parse(data);
								if (json.msg == "true") {
									return "\"" + "Username đã được sư dụng" + "\"";
								} else {
									return 'true';
								}
							}
						}
					}, 
		
					password: {
						required: true,
						maxlength: 50
					},
		
					prepassword: {
						required: true,
						equalTo: '#password',
						maxlength: 50
					},
			
					email: {
						required: true,
						maxlength: 30,
						email: true,
						remote: {
							url: "{{ route('check.email') }}",
							type: "post",
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							data: {
								email: function () {
									return $("input[name='email']").val();
								}
							},
							dataFilter: function (data) {
								var json = JSON.parse(data);
								if (json.msg == "true") {
									return "\"" + "Email đã được sư dụng" + "\"";
								} else {
									return 'true';
								}
							}
						}
					},    
				},
	 
				messages: {
					taikhoan: {
						required: "Vui lòng nhập tên",
						maxlength: "Độ dài không quá 50 ký tự."
					},
		
					password: {
						required: "Vui lòng nhập mật khẩu",
						maxlength: "Độ dài không quá 50 ký tự."
					},
		
					prepassword: {
						required: "Vui lòng nhập mật khẩu",
						equalTo: "Vui lòng nhập lại mật khẩu",
						maxlength: "Độ dài không quá 50 ký tự."
					},
		
					email: {
						required: "Vui lòng nhập email",
						email: "Vui lòng nhập email hợp lệ",
						maxlength: "Tên email phải nhỏ hơn hoặc bằng 30 ký tự",
					},
				},
	  
				submitHandler: function(form) {
					$.ajaxSetup({
						headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});
  
			  		$('#send_form').html('Sending..');
					$.ajax({
						url: '{{ route('post.reg') }}' ,
						type: "POST",
						data: $('#contact_us').serialize(),
						success: function( response ) {
							$('#send_form').html('Submit');
							$('#res_message').show();
							$('#res_message').html(response.msg);
							$('#msg_div').removeClass('d-none');
							document.getElementById("contact_us").reset(); 
							setTimeout(function(){
							$('#res_message').hide();
							$('#msg_div').hide();
							},10000);
				
						}
				
					});
		
				}
		  	})
		}
	</script>

