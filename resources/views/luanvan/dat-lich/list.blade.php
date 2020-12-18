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
				<div class="col-sm-12 col-lg-8 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-4 col-xl-4 mb10">
							<div class="breadcrumb_content style2 mb30-991">
								<h2 class="breadcrumb_title">Lịch hẹn của bạn</h2>
								<p>We are glad to see you again!</p>
							</div>
						</div>
						<div class="col-lg-8 col-xl-8">
							<div class="candidate_revew_select style2 text-right mb30-991">
								<ul class="mb0">
									<li class="list-inline-item">
										<div class="candidate_revew_search_box course fn-520">
											<form class="form-inline my-2">
												<input id="timkiem" type="text" value="" name="search" class="form-control" placeholder="Tìm kiếm">
										    	<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
										    </form>
										</div>
									</li>
									{{--   --}}
									<li class="list-inline-item">
										<select class="selectpicker show-tick" id="boloc">
											<option value="all">Tất cả</option>
											<option value="1">Đợi duyệt</option>
											<option value="2">Đã duyệt</option>
											<option value="3">Đã hủy</option>
										</select>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-12" id="route" data="{{route('datlich.boloc',0)}}">
							<div class="my_dashboard_review mb40">
								<div class="property_table">
									<div class="table-responsive mt0">
										<table class="table">
											<thead class="thead-light">
										    	<tr>
										    		<th scope="col" width="40%">Bản tin</th>
										    		<th scope="col" width="15%">Ngày & giờ hẹn</th>
													<th scope="col" width="10%">Khách hẹn</th>
													<th scope="col" width="13%">Trạng thái</th>
										    		<th scope="col" width="12%">Thao tác</th>
										    	</tr>
											</thead>
											<tbody id="table">
												@foreach($datlich as $row)
												<tr>
													<th scope="row">
														<div class="feat_property list favorite_page style2">
															<div class="thumb">
																<img class="img-whp" src="{{asset($row->idbantin->bds->path_hinh)}}" alt="fp1.jpg">
															</div>
															<div class="details">
																<div class="tc_content">
																<div class="row">
																	<h4 style="margin-left: 20px; margin-right:20px;">{{$row->idbantin->tieu_de}}</h4>
																	
																	@if($row->idbantin->hinhthuc->ten_hinhthuc == 'Thuê')
																	
																		<span class="status_tag badge" style="background-color: {{$row->idbantin->hinhthuc->mau_sac}}">
																		{{$row->idbantin->hinhthuc->ten_hinhthuc}}
																	  </span>
																	
																	@elseif($row->idbantin->hinhthuc->ten_hinhthuc == 'Bán')
																	
																	  <span class="status_tag badge" style="background-color: {{$row->idbantin->hinhthuc->mau_sac}}">
																		{{$row->idbantin->hinhthuc->ten_hinhthuc}}
																		</span>
																	@endif
									
																</div>
																	<p><span class="flaticon-placeholder"></span>{{$row->idbantin->bds->dia_chi}}</p>
																	<a class="fp_price text-thm" href="#">{{ number_format($row->idbantin->gia_tien,0,',','.') }} đ
																	@if($row->idbantin->hinhthuc->ten_hinhthuc == 'Thuê')
																	
																		<small>/th</small></a>
																	@endif
																</div>
															</div>
														</div>
													</th>
													
													<td>
														<div class="details">
															<div class="tc_content">
																<div class="row">
																	<h4 style="margin-left: 20px; margin-right:20px;margin-bottom: 0px;margin-top: 30px;">{{date("d-m-Y",strtotime($row->start))}} </h4>
																	<p style="margin-left: 35px;">{{date("H:i A",strtotime($row->gio_hen))}}</p>
																</div>
															</div>
														</div>
													</td>
									
													
													<td>{{$row->idkhachhang->name}}</td>
													
													<td>
														<div class="btn-group">
														@if($row->id_trangthai == 1)
															<button type="button" class="btn btn-warning">Đợi duyệt</button>
															<button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<span class="sr-only">Toggle Dropdown</span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="{{ route('datlich.pheduyet',['id' => $row->id]) }}">Phê duyệt</a>
																<a class="dropdown-item" href="{{ route('datlich.huy',['id' => $row->id]) }}">Hủy</a>
														  	</div>
														@elseif($row->id_trangthai == 2)
															<button type="button" class="btn btn-success">Đã duyệt</button>
															<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<span class="sr-only">Toggle Dropdown</span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="{{ route('datlich.pheduyet',['id' => $row->id]) }}">Phê duyệt</a>
																<a class="dropdown-item" href="{{ route('datlich.huy',['id' => $row->id]) }}">Hủy</a>
														  	</div>
														@elseif($row->id_trangthai == 3)
															<button type="button" class="btn btn-danger">Đã hủy</button>
															<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<span class="sr-only">Toggle Dropdown</span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="{{ route('datlich.pheduyet',['id' => $row->id]) }}">Phê duyệt</a>
																<a class="dropdown-item" href="{{ route('datlich.huy',['id' => $row->id]) }}">Hủy</a>
														  	</div>
														@endif
														</div>

													</td>

													<td>
														<ul class="view_edit_delete_list mb0">
															<li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Nhắn tin"><a href="#"><i class="fa fa-comments" style="color: #335de9; font-size: 20px;"></i></a></li>
														</ul>
													</td>
												</tr>
												@endforeach
											</tbody>
										</table>
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
            

    <script src="{{asset('public/jquery2.0.3.min.js')}}" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

            
    {!! Toastr::message() !!}
   

	<script type="text/javascript">
		$(document).ready(function(){
			var route = $('#route').attr('data');
			//console.log(route);
			//kiểm tra xem coi nó chạy không
			$("#boloc").change(function(){
				var id_boloc = $(this).val();
				//alert(id_boloc);
				// kiểm tra xem có chạy được nhận id option của loaibaiban không
				$.get(route+id_boloc,function(data){
					// alert(data);
					$("#table").html(data);
					$('#table').selectpicker('refresh');
					// phải câu lênh selectpicker('refresh') để ko bị lỗi boostrap-selecet
				});
			});

		});
	</script>

	<script type="text/javascript">

		$(document).ready(function(){
	
		 fetch_customer_data();
	
		 function fetch_customer_data(query = '')
		 {
		  $.ajax({
		   url:"{{ route('datlich.timkiem') }}",
		   method:'GET',
		   data:{query:query},
		   dataType:'json',
		   success:function(data)
		   {
			$('#table').html(data.banhbao);
			$('#total_records').text(data.total_data);
		   }
		  })
		 }
	
		 $(document).on('keyup', '#timkiem', function(){
		  var query = $(this).val();
		  fetch_customer_data(query);
		 });
		});
    </script>

	
@endsection