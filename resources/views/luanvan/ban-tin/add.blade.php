@extends('luanvan.master')
@section('title','Dashbord')
@section('header-account')
style2 menu-fixed main-menu
@endsection

@section('content')
    @include('luanvan.tai-khoan.header-left')
    <section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid ovh">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						
						<div class="col-lg-12 mb10">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Đăng bản tin</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						
						<div class="col-lg-12">
							<form action="{{ route('bantin.add.post') }}" method="POST" enctype="multipart/form-data" >
								{{ csrf_field() }}
								<div class="my_dashboard_review">
									<div class="row">
										<div class="col-lg-12">
											<h4 class="mb30">Thông tin cơ bản</h4>
											<div class="my_profile_setting_input form-group">
												<label for="propertyTitle">Tiêu đề</label>
												<input type="text" class="form-control" id="title" name="title">
											</div>
										</div>

										<div class="col-lg-12">
											<div class="my_profile_setting_textarea">
												<label for="propertyDescription">Slug</label>
												<input type="text" class="form-control" id="slug" name="slug">
											</div>
										</div>
										
										<div class="col-lg-12">
											<div class="my_profile_setting_textarea">
												<label for="propertyDescription">Mô tả</label>
												<textarea class="form-control" name="mota" rows="7"></textarea>
											</div>
										</div>

										<div class="col-lg-4 col-xl-4">
											<div class="my_profile_setting_input form-group">
												<label for="formGroupExamplePrice">Giá</label>
												<input type="text" class="form-control" name="giatien" onChange="format_curency(this);">
											</div>
										</div>

										<div class="col-lg-6 col-xl-4">
											<div class="my_profile_setting_input ui_kit_select_search form-group">
												<label>Loại bất động sản</label>
												<select class="selectpicker" data-live-search="true" data-width="100%" name="loaiBDS">
													<option data-tokens="type1">Chọn loại bất động sản</option>
													@foreach($loaiBDS as $loai)
													<option value="{{ $loai->id }}">{{ $loai->ten_loaiBDS }}</option>
													@endforeach
												
												</select>
											</div>
										</div>

										<div class="col-lg-6 col-xl-4">
											<div class="my_profile_setting_input ui_kit_select_search form-group">
												<label>Hình thức</label>
												<select class="selectpicker" data-live-search="true" data-width="100%" name="hinhthuc">
													<option value="1">Thuê</option>
													<option value="2">Bán</option>
													
												</select>
											</div>
										</div>
										
									</div>
								</div>
								<div class="my_dashboard_review mt30">
									<h4 class="mb30">Vị trí</h4>
									<div class="row">
										<div class="col-lg-8">
											<div class="my_profile_setting_input form-group" >
												<label for="propertyAddress">Địa chỉ</label>
												<input type="text" class="form-control" name="diachi" id="searchInput">
											</div>
										</div>
										<div class="col-lg-4">
											<div class="my_profile_setting_input form-group">
												<label for="propertyState">Tỉnh thành / Thành phố</label>
												<input  id="tinhthanh" class="form-control" name="tinhthanh" disabled="true" />
											</div>
										</div>

										<div class="col-lg-6">
											<input type="hidden" class="form-control" name="lat" id="lat">
										</div>
										<div class="col-lg-6">
											<input type="hidden" class="form-control" name="lng" id="lng">
										</div>
										
									</div>
									<br>
									<div class="row">
										
										<div class="col-lg-12">
											<div class="my_profile_setting_input form-group">
												<style>
													#map
													{
														width: 1240px;
														height: 450px;
													}
												</style>
												<div class="h400 bdrs8" id="map"></div>
											</div>
										</div>
										
										
									</div>
								</div>
								<div class="my_dashboard_review mt30">
									<div class="row">
										<div class="col-lg-12">
											<h4 class="mb30">Thuộc tính</h4>
										</div>
										@foreach($thuoctinh as $tt)
											<div class="col-lg-6 col-xl-4">
												<div class="my_profile_setting_input form-group">
													<label for="propertyId">{{ $tt->ten_thuoctinh }}</label>
													{{--    --}}
													<input type="hidden" class="form-control" value="{{ $tt->id }}" name="thuoctinh[]">
													{{--    --}}
													<input 
													@if($tt->ten_thuoctinh == 'Năm xây dựng')
													type="date" 
													@else
													type="text" 
													@endif
													class="form-control" name="mota_thuoctinh[]">
												</div>
											</div>
										@endforeach

										
										
									
										{{-- Tiện nghi --}}
										<div class="col-xl-12">
											<div class="row">
												<h4 style="margin-left:1.5%">Tài sản</h4>
												<h4 style="margin-left:43.5%">Số lượng</h4>
											</div>
										</div>

										<div class="row col-xl-12" id="dynamic_field">
											<div class="row col-xl-12" >
												<div class="col-xl-6">
													<div class="my_profile_setting_input ui_kit_select_search form-group">
														<select class="selectpicker" data-live-search="true" data-width="100%" name="taisan[]">
															@foreach($taisan as $taisan2)
															<option value="{{ $taisan2->id }}">{{ $taisan2->ten_taisan }}</option>
															@endforeach
														
														</select>
													</div>
												</div>

												<div class="col-xl-2" style="margin-right:20px;">
													<div class="my_profile_setting_input form-group">
														<input type="text" class="form-control" name="soluong[]">
													</div>
												</div>

												<div class="col-xl-2 my_profile_setting_input" >
													<button class="btn btn2 float-right" style="background-color:#0099CC;border: 2px solid #0099CC; color: #fff" type="button" name="add" id="add">Thêm</button>
												</div>
											</div>
										</div>

										<div class="col-xl-12">
											<h4>Tien ich</h4>
										</div>
										<div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
											<ul class="ui_kit_checkbox selectable-list">
												<li>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck1">
														<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
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
														<input type="checkbox" class="custom-control-input" id="customCheck3">
														<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
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
														<input type="checkbox" class="custom-control-input" id="customCheck5">
														<label class="custom-control-label" for="customCheck5">Microwave</label>
													</div>
												</li>
											</ul>
										</div>
										<div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
											<ul class="ui_kit_checkbox selectable-list">
												<li>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck6">
														<label class="custom-control-label" for="customCheck6">TV Cable</label>
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
														<input type="checkbox" class="custom-control-input" id="customCheck8">
														<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
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
														<input type="checkbox" class="custom-control-input" id="customCheck10">
														<label class="custom-control-label" for="customCheck10">Gym</label>
													</div>
												</li>
											</ul>
										</div>
										<div class="col-sm-4 col-md-4 col-lg-4 col-xl-2">
											<ul class="ui_kit_checkbox selectable-list">
												<li>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck11">
														<label class="custom-control-label" for="customCheck11">Refrigerator</label>
													</div>
												</li>
												<li>
													<div class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" id="customCheck12">
														<label class="custom-control-label" for="customCheck12">WiFi</label>
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
														<input type="checkbox" class="custom-control-input" id="customCheck14">
														<label class="custom-control-label" for="customCheck14">Sauna</label>
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
								
								{{--  --}}
								<div class="my_dashboard_review mt30">
									<div class="row">
										<div class="col-lg-12">
											<h4 class="mb30">Hinh anh</h4>
										</div>
										<div class="col-lg-12">
											{{--  <ul class="mb0">
												<li class="list-inline-item">
													<div class="portfolio_item">
														<img class="img-fluid" src="images/property/fp1.jpg" alt="fp1.jpg">
														<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="portfolio_item">
														<img class="img-fluid" src="images/property/fp2.jpg" alt="fp2.jpg">
														<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
													</div>
												</li>
												<li class="list-inline-item">
													<div class="portfolio_item">
														<img class="img-fluid" src="images/property/fp3.jpg" alt="fp3.jpg">
														<div class="edu_stats_list" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></div>
													</div>
												</li>
											</ul>  --}}

											<div class="my_profile_setting_input form-group">
												<label>Ảnh chính</label>
												<div class="avatar-upload">
													<div class="avatar-edit">
														<input class="btn btn-thm" type="file" id="imageUpload" accept=".png, .jpg, .jpeg"  name="path_hinh">
														<label for="imageUpload"></label>
													</div>
													<div class="avatar-preview">
														<div id="imagePreview"></div>
													</div>
												</div>
											</div>

											
										</div>
										<div class="col-lg-6 col-xl-4">
											
										</div>

										<br>
										<br>

										
										<div class="col-lg-12">
											<div class="portfolio_upload">
												<input type="file" name="file[]" multiple/>
												<div class="icon " style="width: 48px;height:48px; margin-left: 48%; margin-top: 7%;">
													<span class="flaticon-download"></span>
												</div>
												<p>Upload anh o day</p>
											</div>
										</div>
										
										<div class="col-xl-12">
											<div class="my_profile_setting_input">
												<button class="btn btn1 float-left">Back</button>
												<button type="submit" class="btn btn2 float-right">Luu</button>
											</div>
										</div>
									</div>
								</div>
							
							</form>
							</br>

						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script async defer 
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&&amp;libraries=places%2Cgeometry&amp;callback=initMap&amp;ver=1">
    </script>
    <script>
		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
			  center: {lat: -33.8688, lng: 151.2195},
			  zoom: 13
			});
			var input = document.getElementById('searchInput');
			
		
			var autocomplete = new google.maps.places.Autocomplete(input);
			autocomplete.bindTo('bounds', map);
		
			var infowindow = new google.maps.InfoWindow();
			var marker = new google.maps.Marker({
				map: map,
				draggable: true,
				anchorPoint: new google.maps.Point(0, -29)
			});
		
			autocomplete.addListener('place_changed', function() {
				infowindow.close();
				marker.setVisible(false);
				var place = autocomplete.getPlace();
				if (!place.geometry) {
					window.alert("Autocomplete's returned place contains no geometry");
					return;
				}
		  
				// If the place has a geometry, then present it on a map.
				if (place.geometry.viewport) {
					map.fitBounds(place.geometry.viewport);
				} else {
					map.setCenter(place.geometry.location);
					map.setZoom(17);
				}
				marker.setIcon(({
					url: place.icon,
					size: new google.maps.Size(71, 71),
					origin: new google.maps.Point(0, 0),
					anchor: new google.maps.Point(17, 34),
					scaledSize: new google.maps.Size(35, 35)
				}));
				marker.setPosition(place.geometry.location);
				marker.setVisible(true);
			
				var address = '';
				if (place.address_components) {
					address = [
					  (place.address_components[0] && place.address_components[0].short_name || ''),
					  (place.address_components[1] && place.address_components[1].short_name || ''),
					  (place.address_components[2] && place.address_components[2].short_name || '')
					].join(' ');
				}
			
				infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
				infowindow.open(map, marker);
			  
				// Location details
				for (var i = 0; i < place.address_components.length; i++) {
					if(place.address_components[i].types[0] == 'administrative_area_level_1'){
						document.getElementById('tinhthanh').value = "";
						document.getElementById('tinhthanh').disabled = false;
						document.getElementById('tinhthanh').value = place.address_components[i].long_name;
					}
				}
				document.getElementById('lat').value = place.geometry.location.lat();
				document.getElementById('lng').value = place.geometry.location.lng();
			});
		}
	  </script>
		{{--  2  --}}
	<script>
		$(document).ready(function(){  
			var i=1;  
			$('#add').click(function(){  
				i++;  
				$('#dynamic_field').append('<div class="row col-xl-12" id="row'+i+'" > <div class="col-xl-6"><div class="my_profile_setting_input ui_kit_select_search form-group"><select class="selectpicker" data-live-search="true" data-width="100%" name="taisan[]">@foreach($taisan as $taisan2)<option value="{{ $taisan2->id }}"> {{ $taisan2->ten_taisan }}</option>@endforeach</select></div></div><div class="col-xl-2" style="margin-right:20px;"><div class="my_profile_setting_input form-group"><input name="soluong[]" type="text" class="form-control" ></div></div><td><div class="col-xl-2 my_profile_setting_input"><button class="btn btn2 float-right btn_remove" type="button" name="remove" id="'+i+'">Xóa</button></div>');  
				$('.selectpicker').selectpicker('refresh') // hiên thị selectpicker;

			});  
			$(document).on('click', '.btn_remove', function(){      
				var button_id = $(this).attr("id");   
				$('#row'+button_id+'').remove();  
			});
		});  
	</script>
		{{--  3  --}}
	<script>
		$('#title').change(function(e) {
			$.get('{{ route('bantin.checkslug') }}',
				{'title' : $(this).val() },
				function (data){
					$('#slug').val(data.slug);
				}
			);
		});
	</script>
	{{--  4  --}}
	<script>
		function format_curency(a) {
			  a.value = a.value.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.");
		}
	</script>
@endsection
