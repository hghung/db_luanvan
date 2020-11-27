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
                            <h2 class="breadcrumb_title">Loại thành viên</h2>
                            <p>We are glad to see you again!</p>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-8">
                        <div class="candidate_revew_select style2 text-right mb30-991">
                            <ul class="mb0">
                                <li class="list-inline-item">
                                    <div class="candidate_revew_search_box course fn-520">
                                        <form class="form-inline my-2">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search Courses" aria-label="Search">
                                            <button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="my_dashboard_review mb40">
                            <div class="col-lg-12">
                                <div class="savesearched_table">
                                    <div class="table-responsive mt0">
                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>
                                                    {{--  <th scope="col">Search</th>
                                                    <th class="dn-lg" scope="col"></th>
                                                    <th class="dn-lg" scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col">Created</th>
                                                    <th scope="col">Action</th>  --}}

                                                    <th scope="col">Vai trò</th>
                                                    <th scope="col"></th>

                                                    <th scope="col">Logo</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>


                                                    <th scope="col">Thao tác</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($medal as $vt)
                                                <tr>
                                                    <th class="title" scope="row">{{ $vt->loai_thanhvien }}</th>
                                                    <td></td>
                                                    @if($vt->logo)
                                                    <td class="dn-lg">
                                                        <img src="{{ asset($vt->logo) }}" alt="" style="width:50px; height:50px;">
                                                    </td>
                                                    @else
                                                    <td class="dn-lg"></td>
                                                    @endif
                                                    <td></td>
                                                    <td></td>

                                                    <td>
                                                        <ul class="view_edit_delete_list mb0">

                                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <a href="{{ route('loaithanhvien.edit',['id' => $vt->id]) }}">
                                                                    <span class="flaticon-edit"></span>
                                                                </a>
                                                            </li>

                                                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <a href="#">
                                                                    <span class="flaticon-garbage"></span>
                                                                </a>
                                                            </li>
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
    </div>
</section>


<script src="{{asset('public/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/toastr/toastr.min.js')}}" ></script>
            
    {!! Toastr::message() !!}
@endsection