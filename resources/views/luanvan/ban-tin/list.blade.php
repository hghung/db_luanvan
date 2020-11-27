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
								<h2 class="breadcrumb_title">Bản tin của bạn</h2>
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
									{{--    --}}
									<li class="list-inline-item">
										<select class="selectpicker show-tick">
											<option>Featured First</option>
											<option>Recent</option>
											<option>Old Review</option>
										</select>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="my_dashboard_review mb40">
								<div class="property_table">
									<div class="table-responsive mt0">
										<table class="table">
											<thead class="thead-light">
										    	<tr>
										    		<th scope="col" width="50%">Bản tin</th>
										    		<th scope="col" width="15%">Ngày đăng</th>
										    		<th scope="col" width="13%">Trạng thái</th>
										    		<th scope="col" width="10%">Lượt xem</th>
										    		<th scope="col" width="12%">Thao tác</th>
										    	</tr>
											</thead>
											<tbody id="bantin">

										    	
										    	
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
    
            
    {!! Toastr::message() !!}
   


	<script type="text/javascript">

		$(document).ready(function(){
	
		 fetch_customer_data();
	
		 function fetch_customer_data(query = '')
		 {
		  $.ajax({
		   url:"{{ route('bantin.timkiem') }}",
		   method:'GET',
		   data:{query:query},
		   dataType:'json',
		   success:function(data)
		   {
			$('#bantin').html(data.banhbao);
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