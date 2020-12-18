<?php

namespace App\Http\Controllers;

use App\Models\db_datlich;
use App\Models\db_bantin;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

use Toastr;

use Carbon\Carbon;
class BookingController extends Controller
{
    public function datlich(Request $rq, $id)
    {
        if(!$rq->nhac_lich && !$rq->duyet )
        {
            $bantin = db_bantin::find($id);
            $format_ngay = date('Y-m-d', strtotime($rq->ngay_hen));
            $datlich = new db_datlich;
            $datlich->noi_dung = $rq->noi_dung;
            //ngay hen
            $datlich->start = $format_ngay;
            //
            $datlich->gio_hen = $rq->gio_hen;
            $datlich->ngay_tao = Carbon::now('Asia/Ho_Chi_Minh');
            $datlich->cap_nhat = Carbon::now('Asia/Ho_Chi_Minh');
            $datlich->id_trangthai = 1; // dang xu li
            $datlich->id_bantin = $id;
            $datlich->id_nguoidang = $bantin->user->id;
            $datlich->id_khachhang = Auth::user()->id;
            // 
            $datlich->title = "Lich hẹn: ".$rq->gio_hen;
            // dd($datlich);
            $datlich->save();

            Toastr::success('Đặt lịch thành công chờ người đăng xử lí', 'Thông báo', ["positionClass" => "toast-top-right"]);
        }
        elseif($rq->nhac_lich)
        {
            $data = db_datlich::where('id',$rq->nhac_lich)->update(['cap_nhat'=>Carbon::now('Asia/Ho_Chi_Minh')]);
            Toastr::info('Đã nhắc lịch hẹn với người đăng', 'Thông báo', ["positionClass" => "toast-top-right"]);
        }
        elseif($rq->duyet)
        {
            Toastr::success('Lịch hẹn đã được duyệt mời bạn đúng giờ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        }

        return redirect()->back();
        
    }
    public function list()
    {
        
        $datlich['datlich'] = db_datlich::where('id_nguoidang','=',Auth::user()->id)
        ->orderBy('cap_nhat','DESC')
        ->get();

       
        return view('luanvan.dat-lich.list',$datlich);

    }

    public function ajax_boloc($id)
    {

        if($id == '0all')
        {
            $datlich= db_datlich::where('id_nguoidang','=',Auth::user()->id)
            ->orderBy('cap_nhat','DESC')
            ->get();
            foreach($datlich as $row)
            {
                echo "<tr>
                        <th scope='row'>
                            <div class='feat_property list favorite_page style2'>
                                <div class='thumb'>
                                    <img class='img-whp' src='".asset($row->idbantin->bds->path_hinh)."' >
                                </div>
                                <div class='details'>
                                    <div class='tc_content'>
                                    <div class='row'>
                                        <h4 style='margin-left: 20px; margin-right:20px;'>".$row->idbantin->tieu_de."</h4>
                                        ";
                                        if($row->idbantin->hinhthuc->ten_hinhthuc == 'Thuê')
                                        {
                echo " 
                                            <span class='status_tag badge' style='background-color: ".$row->idbantin->hinhthuc->mau_sac."'>
                                            ".$row->idbantin->hinhthuc->ten_hinhthuc."
                                            </span>
                                        ";
                                        }
                                        elseif($row->idbantin->hinhthuc->ten_hinhthuc == 'Bán')
                                        {
                echo "                        
                                            <span class='status_tag badge' style='background-color: ".$row->idbantin->hinhthuc->mau_sac."'>
                                            ".$row->idbantin->hinhthuc->ten_hinhthuc."
                                            </span>
                                        ";
                                        }
                                        
                echo " 
                                    </div>
                                        <p><span class='flaticon-placeholder'></span>".$row->idbantin->bds->dia_chi."</p>
                                        <a class='fp_price text-th' href='#'>". number_format($row->idbantin->gia_tien,0,',','.') ." đ
                                        ";
                                
                                        if($row->idbantin->hinhthuc->ten_hinhthuc == 'Thuê')
                                        {
                echo "                        
                                            <small>/th</small></a>
                                        ";
                                        }
                echo " 
                                    </div>
                                </div>
                            </div>
                        </th>
                        
                        <td>
                            <div class='details'>
                                <div class='tc_content'>
                                    <div class='row'>
                                        <h4 style='margin-left: 20px; margin-right:20px;margin-bottom: 0px;margin-top: 30px;'>".date("d-m-Y",strtotime($row->ngay_hen))." </h4>
                                        <p style='margin-left: 35px;'>".date("H:i A",strtotime($row->gio_hen))."</p>
                                    </div>
                                </div>
                            </div>
                        </td>
        
                        
                        <td>".$row->idkhachhang->name."</td>
                        
                        <td>
                            <div class='btn-group'>
                            ";
                            if($row->id_trangthai == 1)
                            {
            echo " 
                                <button type='button' class='btn btn-warning'>Đợi duyệt</button>
                                <button type='button' class='btn btn-warning dropdown-toggle dropdown-toggle-split' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    <span class='sr-only'>Toggle Dropdown</span>
                                </button>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='". route('datlich.pheduyet',['id' => $row->id]) ."'>Phê duyệt</a>
                                    <a class='dropdown-item' href='". route('datlich.huy',['id' => $row->id]) ."'>Hủy</a>
                                </div>
                               ";
                            }
                            elseif($row->id_trangthai == 2)
                            {
            echo "          
                                <button type='button' class='btn btn-success'>Đã duyệt</button>
                                ";
                            }
                            elseif($row->id_trangthai == 3)
                            {
            echo " 
                                <button type='button' class='btn btn-danger'>Đã hủy</button>
                                ";
                            }
            echo " 
                            </div>
                        </td>

                        <td>
                            <ul class='view_edit_delete_list mb0'>
                                <li class='list-inline-item' data-toggle='tooltip' data-placement='top' title='Nhắn tin'><a href='#'><i class='fa fa-comments' style='color: #335de9; font-size: 20px;'></i></a></li>
                            </ul>
                        </td>
                    </tr>
                    ";
                // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
            }
        }

        if($id == '01')
        {
            $datlich= db_datlich::where('id_nguoidang','=',Auth::user()->id)
            ->where('id_trangthai','=',$id)
            ->orderBy('cap_nhat','DESC')
            ->get();
            foreach($datlich as $row)
            {
                echo "<tr>
                        <th scope='row'>
                            <div class='feat_property list favorite_page style2'>
                                <div class='thumb'>
                                    <img class='img-whp' src='".asset($row->idbantin->bds->path_hinh)."' >
                                </div>
                                <div class='details'>
                                    <div class='tc_content'>
                                    <div class='row'>
                                        <h4 style='margin-left: 20px; margin-right:20px;'>".$row->idbantin->tieu_de."</h4>
                                        ";
                                        if($row->idbantin->hinhthuc->ten_hinhthuc == 'Thuê')
                                        {
                echo " 
                                            <span class='status_tag badge' style='background-color: ".$row->idbantin->hinhthuc->mau_sac."'>
                                            ".$row->idbantin->hinhthuc->ten_hinhthuc."
                                            </span>
                                        ";
                                        }
                                        elseif($row->idbantin->hinhthuc->ten_hinhthuc == 'Bán')
                                        {
                echo "                        
                                            <span class='status_tag badge' style='background-color: ".$row->idbantin->hinhthuc->mau_sac."'>
                                            ".$row->idbantin->hinhthuc->ten_hinhthuc."
                                            </span>
                                        ";
                                        }
                                        
                echo " 
                                    </div>
                                        <p><span class='flaticon-placeholder'></span>".$row->idbantin->bds->dia_chi."</p>
                                        <a class='fp_price text-th' href='#'>". number_format($row->idbantin->gia_tien,0,',','.') ." đ
                                        ";
                                
                                        if($row->idbantin->hinhthuc->ten_hinhthuc == 'Thuê')
                                        {
                echo "                        
                                            <small>/th</small></a>
                                        ";
                                        }
                echo " 
                                    </div>
                                </div>
                            </div>
                        </th>
                        
                        <td>
                            <div class='details'>
                                <div class='tc_content'>
                                    <div class='row'>
                                        <h4 style='margin-left: 20px; margin-right:20px;margin-bottom: 0px;margin-top: 30px;'>".date("d-m-Y",strtotime($row->ngay_hen))." </h4>
                                        <p style='margin-left: 35px;'>".date("H:i A",strtotime($row->gio_hen))."</p>
                                    </div>
                                </div>
                            </div>
                        </td>
        
                        
                        <td>".$row->idkhachhang->name."</td>
                        
                        <td>
                            <div class='btn-group'>
                            ";
                            if($row->id_trangthai == 1)
                            {
            echo " 
                                <button type='button' class='btn btn-warning'>Đợi duyệt</button>
                                <button type='button' class='btn btn-warning dropdown-toggle dropdown-toggle-split' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    <span class='sr-only'>Toggle Dropdown</span>
                                </button>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='". route('datlich.pheduyet',['id' => $row->id]) ."'>Phê duyệt</a>
                                    <a class='dropdown-item' href='". route('datlich.huy',['id' => $row->id]) ."'>Hủy</a>
                                </div>
                               ";
                            }
                            elseif($row->id_trangthai == 2)
                            {
            echo "          
                                <button type='button' class='btn btn-success'>Đã duyệt</button>
                                ";
                            }
                            elseif($row->id_trangthai == 3)
                            {
            echo " 
                                <button type='button' class='btn btn-danger'>Đã hủy</button>
                                ";
                            }
            echo " 
                            </div>
                        </td>

                        <td>
                            <ul class='view_edit_delete_list mb0'>
                                <li class='list-inline-item' data-toggle='tooltip' data-placement='top' title='Nhắn tin'><a href='#'><i class='fa fa-comments' style='color: #335de9; font-size: 20px;'></i></a></li>
                            </ul>
                        </td>
                    </tr>
                    ";
                // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
            }
        }

        if($id == '02')
        {
            $datlich= db_datlich::where('id_nguoidang','=',Auth::user()->id)
            ->where('id_trangthai','=',$id)
            ->orderBy('cap_nhat','DESC')
            ->get();
            foreach($datlich as $row)
            {
                echo "<tr>
                        <th scope='row'>
                            <div class='feat_property list favorite_page style2'>
                                <div class='thumb'>
                                    <img class='img-whp' src='".asset($row->idbantin->bds->path_hinh)."' >
                                </div>
                                <div class='details'>
                                    <div class='tc_content'>
                                    <div class='row'>
                                        <h4 style='margin-left: 20px; margin-right:20px;'>".$row->idbantin->tieu_de."</h4>
                                        ";
                                        if($row->idbantin->hinhthuc->ten_hinhthuc == 'Thuê')
                                        {
                echo " 
                                            <span class='status_tag badge' style='background-color: ".$row->idbantin->hinhthuc->mau_sac."'>
                                            ".$row->idbantin->hinhthuc->ten_hinhthuc."
                                            </span>
                                        ";
                                        }
                                        elseif($row->idbantin->hinhthuc->ten_hinhthuc == 'Bán')
                                        {
                echo "                        
                                            <span class='status_tag badge' style='background-color: ".$row->idbantin->hinhthuc->mau_sac."'>
                                            ".$row->idbantin->hinhthuc->ten_hinhthuc."
                                            </span>
                                        ";
                                        }
                                        
                echo " 
                                    </div>
                                        <p><span class='flaticon-placeholder'></span>".$row->idbantin->bds->dia_chi."</p>
                                        <a class='fp_price text-th' href='#'>". number_format($row->idbantin->gia_tien,0,',','.') ." đ
                                        ";
                                
                                        if($row->idbantin->hinhthuc->ten_hinhthuc == 'Thuê')
                                        {
                echo "                        
                                            <small>/th</small></a>
                                        ";
                                        }
                echo " 
                                    </div>
                                </div>
                            </div>
                        </th>
                        
                        <td>
                            <div class='details'>
                                <div class='tc_content'>
                                    <div class='row'>
                                        <h4 style='margin-left: 20px; margin-right:20px;margin-bottom: 0px;margin-top: 30px;'>".date("d-m-Y",strtotime($row->ngay_hen))." </h4>
                                        <p style='margin-left: 35px;'>".date("H:i A",strtotime($row->gio_hen))."</p>
                                    </div>
                                </div>
                            </div>
                        </td>
        
                        
                        <td>".$row->idkhachhang->name."</td>
                        
                        <td>
                            <div class='btn-group'>
                            ";
                            if($row->id_trangthai == 1)
                            {
            echo " 
                                <button type='button' class='btn btn-warning'>Đợi duyệt</button>
                                <button type='button' class='btn btn-warning dropdown-toggle dropdown-toggle-split' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    <span class='sr-only'>Toggle Dropdown</span>
                                </button>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='". route('datlich.pheduyet',['id' => $row->id]) ."'>Phê duyệt</a>
                                    <a class='dropdown-item' href='". route('datlich.huy',['id' => $row->id]) ."'>Hủy</a>
                                </div>
                               ";
                            }
                            elseif($row->id_trangthai == 2)
                            {
            echo "          
                                <button type='button' class='btn btn-success'>Đã duyệt</button>
                                ";
                            }
                            elseif($row->id_trangthai == 3)
                            {
            echo " 
                                <button type='button' class='btn btn-danger'>Đã hủy</button>
                                ";
                            }
            echo " 
                            </div>
                        </td>

                        <td>
                            <ul class='view_edit_delete_list mb0'>
                                <li class='list-inline-item' data-toggle='tooltip' data-placement='top' title='Nhắn tin'><a href='#'><i class='fa fa-comments' style='color: #335de9; font-size: 20px;'></i></a></li>
                            </ul>
                        </td>
                    </tr>
                    ";
                // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
            }
        }

        if($id == '03')
        {
            $datlich= db_datlich::where('id_nguoidang','=',Auth::user()->id)
            ->where('id_trangthai','=',$id)
            ->orderBy('cap_nhat','DESC')
            ->get();
            foreach($datlich as $row)
            {
                echo "<tr>
                        <th scope='row'>
                            <div class='feat_property list favorite_page style2'>
                                <div class='thumb'>
                                    <img class='img-whp' src='".asset($row->idbantin->bds->path_hinh)."' >
                                </div>
                                <div class='details'>
                                    <div class='tc_content'>
                                    <div class='row'>
                                        <h4 style='margin-left: 20px; margin-right:20px;'>".$row->idbantin->tieu_de."</h4>
                                        ";
                                        if($row->idbantin->hinhthuc->ten_hinhthuc == 'Thuê')
                                        {
                echo " 
                                            <span class='status_tag badge' style='background-color: ".$row->idbantin->hinhthuc->mau_sac."'>
                                            ".$row->idbantin->hinhthuc->ten_hinhthuc."
                                            </span>
                                        ";
                                        }
                                        elseif($row->idbantin->hinhthuc->ten_hinhthuc == 'Bán')
                                        {
                echo "                        
                                            <span class='status_tag badge' style='background-color: ".$row->idbantin->hinhthuc->mau_sac."'>
                                            ".$row->idbantin->hinhthuc->ten_hinhthuc."
                                            </span>
                                        ";
                                        }
                                        
                echo " 
                                    </div>
                                        <p><span class='flaticon-placeholder'></span>".$row->idbantin->bds->dia_chi."</p>
                                        <a class='fp_price text-th' href='#'>". number_format($row->idbantin->gia_tien,0,',','.') ." đ
                                        ";
                                
                                        if($row->idbantin->hinhthuc->ten_hinhthuc == 'Thuê')
                                        {
                echo "                        
                                            <small>/th</small></a>
                                        ";
                                        }
                echo " 
                                    </div>
                                </div>
                            </div>
                        </th>
                        
                        <td>
                            <div class='details'>
                                <div class='tc_content'>
                                    <div class='row'>
                                        <h4 style='margin-left: 20px; margin-right:20px;margin-bottom: 0px;margin-top: 30px;'>".date("d-m-Y",strtotime($row->ngay_hen))." </h4>
                                        <p style='margin-left: 35px;'>".date("H:i A",strtotime($row->gio_hen))."</p>
                                    </div>
                                </div>
                            </div>
                        </td>
        
                        
                        <td>".$row->idkhachhang->name."</td>
                        
                        <td>
                            <div class='btn-group'>
                            ";
                            if($row->id_trangthai == 1)
                            {
            echo " 
                                <button type='button' class='btn btn-warning'>Đợi duyệt</button>
                                <button type='button' class='btn btn-warning dropdown-toggle dropdown-toggle-split' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                    <span class='sr-only'>Toggle Dropdown</span>
                                </button>
                                <div class='dropdown-menu'>
                                    <a class='dropdown-item' href='". route('datlich.pheduyet',['id' => $row->id]) ."'>Phê duyệt</a>
                                    <a class='dropdown-item' href='". route('datlich.huy',['id' => $row->id]) ."'>Hủy</a>
                                </div>
                               ";
                            }
                            elseif($row->id_trangthai == 2)
                            {
            echo "          
                                <button type='button' class='btn btn-success'>Đã duyệt</button>
                                ";
                            }
                            elseif($row->id_trangthai == 3)
                            {
            echo " 
                                <button type='button' class='btn btn-danger'>Đã hủy</button>
                                ";
                            }
            echo " 
                            </div>
                        </td>

                        <td>
                            <ul class='view_edit_delete_list mb0'>
                                <li class='list-inline-item' data-toggle='tooltip' data-placement='top' title='Nhắn tin'><a href='#'><i class='fa fa-comments' style='color: #335de9; font-size: 20px;'></i></a></li>
                            </ul>
                        </td>
                    </tr>
                    ";
                // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
            }
        }

    }
    
    


    public function phe_duyet($id)
    {
        $data = db_datlich::where('id',$id)->update(['id_trangthai'=>2]);
        $data = db_datlich::where('id',$id)->update(['cap_nhat'=>Carbon::now('Asia/Ho_Chi_Minh')]);

        Toastr::success('Đã phê duyệt', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function huy_duyet($id)
    {
        $data = db_datlich::where('id',$id)->update(['id_trangthai'=>3]);
        $data = db_datlich::where('id',$id)->update(['cap_nhat'=>Carbon::now('Asia/Ho_Chi_Minh')]);
        Toastr::success('Đã phê duyệt', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


}
