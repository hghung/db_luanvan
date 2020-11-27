@extends('luanvan.master')
@section('title','Dashbord')
@section('header-account')
style2 menu-fixed main-menu
@endsection

@section('content')
    @include('luanvan.tai-khoan.header-left')
    <section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0"></div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						
						<div class="col-lg-12 " style="height: 100px !important">
							<div class="breadcrumb_content style2">
								<h2 class="breadcrumb_title">Thêm phương thức thanh toán</h2>
								<p>Chúng tôi rất vui khi gặp bạn!</p>
							</div>
						</div>
						<div class="col-lg-12">
                            <form class="form" method="POST"  action="{{ route('phuongthuc.add.post') }}" enctype="multipart/form-data"> 
                            {{ csrf_field() }}
                                <div class="my_dashboard_review">
                                    <div class="row">
                                        
                                        <div class="col-xl-12">
                                            <div class="row">
                                                {{--  logo  --}}
                                                <div class="col-lg-8 col-xl-8">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label >Phương thức thanh toán</label>
                                                        <input type="text" class="form-control" name="phuongthuc"  >
                                                    </div>
                                                </div>
                                                
                                                {{--    --}}

                                                <div class="col-lg-6 col-xl-4">
                                                    <div class="my_profile_setting_input ui_kit_select_search form-group">
                                                        <label>Trạng thái</label>
                                                        <select class="selectpicker" data-width="100%" name="trangthai">
                                                            <option value="1">Active</option>
                                                            <option value="2">Disable</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="my_profile_setting_input form-group">
                                                        <label for="formGroupExampleInput1">Upload ảnh</label>
                                                        <input type="file" class="form-control" name="logo" >
                                                        <p>*kích thước 32px x 32px</p>

                                                    </div>
                                                </div>
                                                
                                                <div class="col-xl-12">
                                                    <div class="my_profile_setting_input">
                                                        <button class="btn btn1 float-left">
                                                            <a href="{{ route('phuongthuc.list') }}">
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