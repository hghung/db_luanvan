@extends('luanvan.master')
@section('title','Home')
@section('header')
navbar-scrolltofixed stricky main-menu
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('public/animation/animation-vip.css') }}" />
<link rel="stylesheet" href="{{ asset('public/animation/animation-new.css') }}" />


    <!-- Home Design -->
	<section class="home-one home1-overlay home1_bgi1">
		<div class="container">
			<div class="row posr">
				<div class="col-lg-12">
					<div class="home_content">
						<div class="home-text text-center">
							<h2 class="fz55">BẤT ĐỘNG SẢN NTKD</h2>
							<p class="fz18" >
                                <ul class="home4_iconbox mb0">
                                    <li class="list-inline-item" >
                                        <div class="icon" >
                                            <span class="flaticon-house" style="color: "></span>
                                            <p style="color: ">Biệt thự - Villa</p>
                                        </div>
                                    </li>

                                    <li class="list-inline-item">
                                        <div class="icon">
                                            <span class="flaticon-building" style=" "></span>
                                            <p style="margin-left : 10px; ">Chung cư</p>
                                        </div>
                                    </li>

                                    <li class="list-inline-item">
                                        <div class="icon">
                                            <span class="flaticon-house-2" style="color: "></span>
                                            <p style="color: ">Căn hộ</p>
                                        </div>
                                    </li>

                                    <li class="list-inline-item">
                                        <div class="icon">
                                            <span class="flaticon-house-1" style="color: "></span>
                                            <p style="color: ">Nhà gia đình</p>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </p>
						</div>
						<div class="home_adv_srch_opt">
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Mua</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Thuê</a>
								</li>
							</ul>
							<div class="tab-content home1_adsrchfrm" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Nhập từ khóa...">
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_two">
													<div class="candidate_revew_select">
														<select class="selectpicker w100 show-tick">
															<option>Loại bất động sản</option>
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
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Vị trí">
											    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs" class="btn dd_btn">
												    	<span>Giá</span>
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
											<li class="custome_fields_520 list-inline-item">
												<div class="navbered">
												  	<div class="mega-dropdown">
													    <span id="show_advbtn" class="dropbtn">Nâng cao <i class="flaticon-more pl10 flr-520"></i></span>
													    <div class="dropdown-content">
                                                            <div class="row p15">
                                                                <div class="col-lg-12">
                                                                    <h4 class="text-thm3">Amenities</h4>
                                                                </div>
                                                              <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                  <ul class="ui_kit_checkbox selectable-list">
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                              <label class="custom-control-label" for="customCheck1">Điều hòa</label>
                                                                          </div>
                                                                      </li>
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                              <label class="custom-control-label" for="customCheck2">Đồ nướng</label>
                                                                          </div>
                                                                      </li>
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                              <label class="custom-control-label" for="customCheck3">Hồ bơi</label>
                                                                          </div>
                                                                      </li>
                                                                  </ul>
                                                              </div>
                                                              <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                  <ul class="ui_kit_checkbox selectable-list">
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                                              <label class="custom-control-label" for="customCheck4">Máy cắt cỏ</label>
                                                                          </div>
                                                                      </li>
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                                              <label class="custom-control-label" for="customCheck5">Lò vi sóng</label>
                                                                          </div>
                                                                      </li>
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                                              <label class="custom-control-label" for="customCheck6">TV Cáp</label>
                                                                          </div>
                                                                      </li>
                                                                  </ul>
                                                              </div>
                                                              <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                  <ul class="ui_kit_checkbox selectable-list">
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                                              <label class="custom-control-label" for="customCheck7">Tủ lạnh</label>
                                                                          </div>
                                                                      </li>
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                                              <label class="custom-control-label" for="customCheck8">Máy giặt</label>
                                                                          </div>
                                                                      </li>
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                                              <label class="custom-control-label" for="customCheck9">Nhà tắm ngoài trời</label>
                                                                          </div>
                                                                      </li>
                                                                  </ul>
                                                              </div>
                                                              <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                  <ul class="ui_kit_checkbox selectable-list">
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                                              <label class="custom-control-label" for="customCheck10">Phòng tập thẻ dục</label>
                                                                          </div>
                                                                      </li>
                                                                      
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                                              <label class="custom-control-label" for="customCheck12">WiFi</label>
                                                                          </div>
                                                                      </li>
                                                                  </ul>
                                                              </div>
                                                              <div class="col-xxs-6 col-sm col-lg col-xl">
                                                                  <ul class="ui_kit_checkbox selectable-list">
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                                              <label class="custom-control-label" for="customCheck13">Sân vườn</label>
                                                                          </div>
                                                                      </li>
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                                              <label class="custom-control-label" for="customCheck14">Tắm hơi</label>
                                                                          </div>
                                                                      </li>
                                                                      <li>
                                                                          <div class="custom-control custom-checkbox">
                                                                              <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                                              <label class="custom-control-label" for="customCheck15">Rèm cửa</label>
                                                                          </div>
                                                                      </li>
                                                                  </ul>
                                                              </div>
                                                            </div>
                                                            <div class="row p15 pt0-xsd">
                                                                <div class="col-lg-11 col-xl-10">
                                                                    <ul class="apeartment_area_list mb0">
                                                                        <li class="list-inline-item">
                                                                          <div class="candidate_revew_select">
                                                                              <select class="selectpicker w100 show-tick">
                                                                                  <option>Phòng tắm</option>
                                                                                  <option>1</option>
                                                                                  <option>2</option>
                                                                                  <option>3</option>
                                                                                  <option>4</option>
                                                                                  <option>5</option>
                                                                                  <option>6</option>
                                                                                  <option>7</option>
                                                                                  <option>8</option>
                                                                              </select>
                                                                          </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                          <div class="candidate_revew_select">
                                                                              <select class="selectpicker w100 show-tick">
                                                                                  <option>Phòng ngủ</option>
                                                                                  <option>1</option>
                                                                                  <option>2</option>
                                                                                  <option>3</option>
                                                                                  <option>4</option>
                                                                                  <option>5</option>
                                                                                  <option>6</option>
                                                                                  <option>7</option>
                                                                                  <option>8</option>
                                                                              </select>
                                                                          </div>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                          <div class="candidate_revew_select">
                                                                              <select class="selectpicker w100 show-tick">
                                                                                  <option>Năm xây dựng</option>
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
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                                <div class="col-lg-1 col-xl-2">
                                                                    <div class="mega_dropdown_content_closer">
                                                                        <h5 class="text-thm text-right mt15"><span id="hide_advbtn" class="curp">Ẩn</span></h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                      </div>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="home1-advnc-search">
										<ul class="h1ads_1st_list mb0">
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Enter keyword...">
											    </div>
											</li>
											<li class="list-inline-item">
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
											<li class="list-inline-item">
											    <div class="form-group">
											    	<input type="text" class="form-control" id="exampleInputEmail3" placeholder="Location">
											    	<label for="exampleInputEmail3"><span class="flaticon-maps-and-flags"></span></label>
											    </div>
											</li>
											<li class="list-inline-item">
												<div class="small_dropdown2">
												    <div id="prncgs2" class="btn dd_btn">
												    	<span>Price</span>
												    	<label for="exampleInputEmail4"><span class="fa fa-angle-down"></span></label>
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
											<li class="custome_fields_520 list-inline-item">
												<div class="navbered">
												  	<div class="mega-dropdown">
													    <span id="show_advbtn2" class="dropbtn">Advanced <i class="flaticon-more pl10 flr-520"></i></span>
													    <div class="dropdown-content">
													      	<div class="row p15">
													      		<div class="col-lg-12">
													      			<h4 class="text-thm3">Amenities</h4>
													      		</div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck16">
																				<label class="custom-control-label" for="customCheck16">Air Conditioning</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck17">
																				<label class="custom-control-label" for="customCheck17">Lawn</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck18">
																				<label class="custom-control-label" for="customCheck18">Swimming Pool</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck19">
																				<label class="custom-control-label" for="customCheck19">Barbeque</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck20">
																				<label class="custom-control-label" for="customCheck20">Microwave</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck21">
																				<label class="custom-control-label" for="customCheck21">TV Cable</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck22">
																				<label class="custom-control-label" for="customCheck22">Dryer</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck23">
																				<label class="custom-control-label" for="customCheck23">Outdoor Shower</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck24">
																				<label class="custom-control-label" for="customCheck24">Washer</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck25">
																				<label class="custom-control-label" for="customCheck25">Gym</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck26">
																				<label class="custom-control-label" for="customCheck26">Refrigerator</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck27">
																				<label class="custom-control-label" for="customCheck27">WiFi</label>
																			</div>
													                	</li>
													                </ul>
														        </div>
														        <div class="col-xxs-6 col-sm col-lg col-xl">
													                <ul class="ui_kit_checkbox selectable-list">
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck28">
																				<label class="custom-control-label" for="customCheck28">Laundry</label>
																			</div>
													                	</li>
													                	<li>
																			<div class="custom-control custom-checkbox">
																				<input type="checkbox" class="custom-control-input" id="customCheck29">
																				<label class="custom-control-label" for="customCheck29">Sauna</label>
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
													      	<div class="row p15 pt0-xsd">
													      		<div class="col-lg-11 col-xl-10">
													      			<ul class="apeartment_area_list mb0">
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Bathrooms</option>
																					<option>1</option>
																					<option>2</option>
																					<option>3</option>
																					<option>4</option>
																					<option>5</option>
																					<option>6</option>
																					<option>7</option>
																					<option>8</option>
																				</select>
																			</div>
													      				</li>
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Bedrooms</option>
																					<option>1</option>
																					<option>2</option>
																					<option>3</option>
																					<option>4</option>
																					<option>5</option>
																					<option>6</option>
																					<option>7</option>
																					<option>8</option>
																				</select>
																			</div>
													      				</li>
													      				<li class="list-inline-item">
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
													      				</li>
													      				<li class="list-inline-item">
																			<div class="candidate_revew_select">
																				<select class="selectpicker w100 show-tick">
																					<option>Built-up Area</option>
																					<option>Adana</option>
																					<option>Ankara</option>
																					<option>Antalya</option>
																					<option>Bursa</option>
																					<option>Bodrum</option>
																					<option>Gaziantep</option>
																					<option>İstanbul</option>
																					<option>İzmir</option>
																					<option>Konya</option>
																				</select>
																			</div>
													      				</li>
													      			</ul>
													      		</div>
													      		<div class="col-lg-1 col-xl-2">
													      			<div class="mega_dropdown_content_closer">
														      			<h5 class="text-thm text-right mt15"><span id="hide_advbtn2" class="curp">Hide</span></h5>
													      			</div>
													      		</div>
													      	</div>
													    </div>
													</div>
												</div>
											</li>
											<li class="list-inline-item">
												<div class="search_option_button">
												    <button type="submit" class="btn btn-thm">Search</button>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    {{--  /////////////////////////////////////////  --}}

    
	<!-- Feature Properties -->
	<section id="best-property" class="best-property bgc-f7">
		<div class="container ovh">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2>Bảng tin nổi bật </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
                    <div class="best_property_slider style2">
                        {{--  start  --}}
                      
                        <div class="item rainbow">
                            <div class="properti_city home6">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/fp10.jpg')}}" alt="fp10.jpg" style="height: 390px;">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="details">
                                        <a class="fp_price" href="#">$93,000<small>/mo</small></a>
                                        <h4>Renovated Apartment</h4>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--  end  --}}
                        <div class="item box">
                            <div class="properti_city home6">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/fp11.jpg')}}" alt="fp11.jpg" style="height: 390px;">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="details">
                                        <a class="fp_price" href="#">$48,000<small>/mo</small></a>
                                        <h4>Gorgeous Villa Bay View</h4>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--    --}}
                        <div class="item">
                            <div class="properti_city home6">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/fp12.jpg')}}" alt="fp12.jpg" style="height: 390px;">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item dn"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="details">
                                        <a class="fp_price" href="#">$954,000<small>/mo</small></a>
                                        <h4> Luxury Villa Called Elvado </h4>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="properti_city home6">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/fp13.jpg')}}" alt="fp13.jpg" style="height: 390px;">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item dn"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="details">
                                        <a class="fp_price" href="#">$243,000<small>/mo</small></a>
                                        <h4>Luxury Family Home</h4>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="properti_city home6">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/fp14.jpg')}}" alt="fp14.jpg" style="height: 390px;">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item dn"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="details">
                                        <a class="fp_price" href="#">$75,000<small>/mo</small></a>
                                        <h4>Gregory Place</h4>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="properti_city home6">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/fp10.jpg')}}" alt="fp10.jpg" style="height: 390px;">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="details">
                                        <a class="fp_price" href="#">$13,000<small>/mo</small></a>
                                        <h4>Renovated Apartment</h4>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="properti_city home6">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/fp11.jpg')}}" alt="fp11.jpg" style="height: 390px;">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item"><a href="#">Featured</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="details">
                                        <a class="fp_price" href="#">$48,000<small>/mo</small></a>
                                        <h4>Gorgeous Villa Bay View</h4>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="properti_city home6">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/fp12.jpg')}}" alt="fp12.jpg" style="height: 390px;">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item dn"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="details">
                                        <a class="fp_price" href="#">$954,000<small>/mo</small></a>
                                        <h4> Luxury Villa Called Elvado </h4>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="properti_city home6">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/fp13.jpg')}}" alt="fp13.jpg" style="height: 390px;">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item dn"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="details">
                                        <a class="fp_price" href="#">$243,000<small>/mo</small></a>
                                        <h4>Luxury Family Home</h4>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="properti_city home6">
                                <div class="thumb">
                                    <img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/fp14.jpg')}}" alt="fp14.jpg" style="height: 390px;">
                                    <div class="thmb_cntnt">
                                        <ul class="tag mb0">
                                            <li class="list-inline-item"><a href="#">For Rent</a></li>
                                            <li class="list-inline-item dn"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="overlay">
                                    <div class="details">
                                        <a class="fp_price" href="#">$75,000<small>/mo</small></a>
                                        <h4>Gregory Place</h4>
                                        <ul class="prop_details mb0">
                                            <li class="list-inline-item"><a href="#">Beds: 4</a></li>
                                            <li class="list-inline-item"><a href="#">Baths: 2</a></li>
                                            <li class="list-inline-item"><a href="#">Sq Ft: 5280</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</section>

    <!-- Thành phố -->
    <section id="property-city" class="property-city pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center">
						<h2>Những thành phố nổi bật</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-xl-4">
					<div class="properti_city home5">
						<div class="thumb"><img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/pc1.jpg')}}" alt="pc1.jpg"></div>
						<div class="overlay">
							<div class="details">
								<div class="left"><h4>Hà Nội</h4></div>
								<p>24 Bảng tin</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8">
					<div class="properti_city home5">
						<div class="thumb"><img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/pc2.jpg')}}" alt="pc2.jpg"></div>
						<div class="overlay">
							<div class="details">
								<div class="left"><h4>Hải Phòng</h4></div>
								<p>18 Bảng tin</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-8">
					<div class="properti_city home5">
						<div class="thumb"><img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/pc3.jpg')}}" alt="pc3.jpg"></div>
						<div class="overlay">
							<div class="details">
								<div class="left"><h4>Hồ Chí Minh</h4></div>
								<p>89 Bảng tin</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-4">
					<div class="properti_city home5">
						<div class="thumb"><img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/pc4.jpg')}}" alt="pc4.jpg"></div>
						<div class="overlay">
							<div class="details">
								<div class="left"><h4>Cần Thơ</h4></div>
								<p>47 Bảng tin</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    <!-- Whatare you looking for -->
	
    
    {{--  2  --}}
    <section id="best-property" class="best-property bgc-thm">
        <div class="container ovh">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2 class="color-white">Bảng tin mới nhất</h2>
                        <p class="color-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="best_property_slider">
                        <div class="item">
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
                        <div class="item">
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
                                        <p class="text-thm">Villa</p>
                                        <h4>Gorgeous Villa Bay View</h4>
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
                        <div class="item">
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
                                        <p class="text-thm">Single Family Home</p>
                                        <h4>Luxury Family Home</h4>
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
                        <div class="item">
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
                        <div class="item">
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
                                        <p class="text-thm">Villa</p>
                                        <h4>Gorgeous Villa Bay View</h4>
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
                        <div class="item">
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
                                        <p class="text-thm">Single Family Home</p>
                                        <h4>Luxury Family Home</h4>
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
                        <div class="item">
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
                        <div class="item">
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
                                        <p class="text-thm">Villa</p>
                                        <h4>Gorgeous Villa Bay View</h4>
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
                        <div class="item">
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
                                        <p class="text-thm">Single Family Home</p>
                                        <h4>Luxury Family Home</h4>
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
                        <div class="item">
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
                        <div class="item">
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
                                        <p class="text-thm">Villa</p>
                                        <h4>Gorgeous Villa Bay View</h4>
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
                        <div class="item">
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
                                        <p class="text-thm">Single Family Home</p>
                                        <h4>Luxury Family Home</h4>
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
                        <div class="item">
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
                        <div class="item">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp2.jpg')}}" alt="fp2.jpg')}}">
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
                                        <p class="text-thm">Villa</p>
                                        <h4>Gorgeous Villa Bay View</h4>
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
                        <div class="item">
                            <div class="feat_property">
                                <div class="thumb">
                                    <img class="img-whp" src="{{ asset('public/luanvan/images/property/fp3.jpg')}}" alt="fp3.jpg')}}">
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
                                        <p class="text-thm">Single Family Home</p>
                                        <h4>Luxury Family Home</h4>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--  44  --}}

    <!-- Tin tức-->
	<section id="feature-property" class="feature-property bgc-f7">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="#feature-property">
				    	<div class="mouse_scroll">
			        		<div class="icon">
					    		<h4>Scroll Down</h4>
					    		<p>to discover more</p>
			        		</div>
			        		<div class="thumb">
			        			<img src="{{ asset('public/luanvan/images/resource/mouse.png') }}" alt="mouse.png">
			        		</div>
				    	</div>
				    </a>
				</div>
			</div>
		</div>
		<div class="container ovh">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb40">
						<h2>Tin tức</h2>
						<p>Handpicked properties by our team.</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="feature_property_slider">
						
						<div class="item">
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
											<li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
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
											<li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
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
						<div class="item">
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
											<li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
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
											<li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
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
						<div class="item">
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
											<li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
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
											<li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
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
											<li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png') }}" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
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
											<li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">Ali Tufan</a></li>
										</ul>
										<div class="fp_pdate float-right">4 years ago</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
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
											<li class="list-inline-item"><a href="#"><img src="{{ asset('public/luanvan/images/property/pposter1.png')}}" alt="pposter1.png"></a></li>
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
    

    {{--  3  --}}
    <section id="property-search" class="property-search bg-img4">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<div class="main-title text-center mb30">
						<h2 style="margin-top: 80px;">Tại sao chọn chúng tôi</h2>
						<h4>Bởi vì chúng tôi cung cấp các dịch vụ hợp lí và chăm sóc khách hàng ưu tiên nhất.</h4>
					</div>
				</div>
            </div>
            
		</div>
    </section>
	<section id="property-city" class="property-city pb30">
		<div class="container">
			<div class="row features_row">
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us style2">
						<div class="icon">
							<span class="flaticon-high-five"></span>
						</div>
						<div class="details">
							<h4>Được hàng nghìn người tin cậy</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 col-lg-4 col-xl-4">
					<div class="why_chose_us style2">
						<div class="icon">
							<span class="flaticon-home-1"></span>
						</div>
						<div class="details">
							<h4>Dịch vụ và hỗ trợ hàng đầu</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
                </div>
                
				<div class="col-md-6 col-lg-4 col-xl-4" style="padding-left: 0px !important;">
					<div class="why_chose_us style2">
						<div class="icon">
							<span class="flaticon-profit"></span>
						</div>
						<div class="details">
							<h4 style="width: 300px !important;">Nhiều hình thức thanh toán đa dạng</h4>
							<p>Aliquam dictum elit vitae mauris facilisis at dictum urna dignissim donec vel lectus vel felis.</p>
						</div>
					</div>
				</div>
            </div>

            
            
			
		</div>
    </section>
    

	

	

	<!-- Our Partners -->
	<section id="our-partners" class="our-partners">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-4 col-xl">
					<div class="properti_city_home8 text-center">
						<div class="thumb">
							<img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/pc1.png')}}" alt="pc1.png">
						</div>
						
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 col-xl">
					<div class="properti_city_home8 text-center">
						<div class="thumb">
							<img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/pc2.png')}}" alt="pc2.png">
						</div>
						
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 col-xl">
					<div class="properti_city_home8 text-center">
						<div class="thumb">
							<img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/pc3.png')}}" alt="pc3.png">
						</div>
						
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 col-xl">
					<div class="properti_city_home8 text-center">
						<div class="thumb">
							<img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/pc4.png')}}" alt="pc4.png">
						</div>
						
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 col-xl">
					<div class="properti_city_home8 text-center">
						<div class="thumb">
							<img class="img-fluid w100" src="{{ asset('public/luanvan/images/property/pc5.png')}}" alt="pc5.png">
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
@endsection