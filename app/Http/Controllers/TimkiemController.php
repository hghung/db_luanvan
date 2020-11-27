<?php

namespace App\Http\Controllers;

use App\Models\db_bantin;
use App\Models\db_datlich;
use Illuminate\Http\Request;
use App\Models\db_thuoctinh;
use App\Models\db_taisan;
use App\Models\db_loaiBDS;
use App\Models\db_trangthai;
use App\Models\db_loaibantin;
use App\Models\db_phuongthucthanhtoan;
use App\Models\db_sanpham;
use DB;
Use Illuminate\Support\Facades\Auth;


class TimkiemController extends Controller
{
    // Thuoc tinh start
    public function timkiem_thuoctinh(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_thuoctinh::where('ten_thuoctinh', 'like', '%'.$query.'%')
                              ->orderBy('id', 'asc')
                              ->get();
          }
          else
          {
            $data =db_thuoctinh::orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
              $output .= '
              <tr class="item-editable">
                  <td class="title" scope="row">
                      '.$row->ten_thuoctinh.'
                  </td>

                  <td class="dn-lg"></td>
                <td></td>

                <td>
                    <ul class="view_edit_delete_list mb0">

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <a href="'.route('thuoctinh.edit',['id' => $row->id]).'">
                                <span class="flaticon-edit"></span>
                            </a>
                        </li>

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <a href="'.route('thuoctinh.delete',['id' => $row->id]).'">
                                <span class="flaticon-garbage"></span>
                            </a>
                        </li>
                    </ul>
                </td>

                      
              </tr>
              ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // khoi phuc
    public function timkiem_thuoctinh_khoiphuc(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_thuoctinh::onlyTrashed()
                                ->where('ten_thuoctinh', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
          }
                             
          else
          {
            $data =db_thuoctinh::onlyTrashed()->orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
                $ngayxoa = date("A H:i || d-m-Y ",strtotime($row->deleted_at));

                $output .= '
                <tr class="item-editable">
                    <td class="title" scope="row">
                        '.$row->ten_thuoctinh.'
                    </td>

                    <td class="dn-lg"></td>
                    <td>
                        '.$ngayxoa.'
                    </td>

                    <td>
                        <ul class="view_edit_delete_list mb0">

                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="'.route('thuoctinh.khoiphuc.post',['id' => $row->id]).'">
                                        <i class="fa fa-medkit" style="color:red; "></i>
                                </a>
                            </li>

                            
                        </ul>
                    </td>

                        
                </tr>
                ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // thuoc tinh end
//////////////////////////////////////////////////////////////////////////////
    // Tai san start
    public function timkiem_taisan(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_taisan::where('ten_taisan', 'like', '%'.$query.'%')
                              ->orderBy('id', 'asc')
                              ->get();
          }
          else
          {
            $data = db_taisan::orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
              $output .= '
              <tr class="item-editable">
                  <td class="title" scope="row">
                      '.$row->ten_taisan.'
                  </td>

                  <td class="dn-lg"></td>
                <td></td>

                <td>
                    <ul class="view_edit_delete_list mb0">

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <a href="'.route('taisan.edit',['id' => $row->id]).'">
                                <span class="flaticon-edit"></span>
                            </a>
                        </li>

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <a onclick="return  ConfirmDelete(abc);" href="'.route('taisan.delete',['id' => $row->id]).'">
                                <span class="flaticon-garbage"></span>
                            </a>
                        </li>
                    </ul>
                </td>

                      
              </tr>
              ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // khoi phuc
    public function timkiem_taisan_khoiphuc(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_taisan::onlyTrashed()
                                ->where('ten_taisan', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
          }
                             
          else
          {
            $data =db_taisan::onlyTrashed()->orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
                $ngayxoa = date("A H:i || d-m-Y ",strtotime($row->deleted_at));

                $output .= '
                <tr class="item-editable">
                    <td class="title" scope="row">
                        '.$row->ten_taisan.'
                    </td>

                    <td class="dn-lg"></td>
                    <td>
                        '.$ngayxoa.'
                    </td>

                    <td>
                        <ul class="view_edit_delete_list mb0">

                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="'.route('taisan.khoiphuc.post',['id' => $row->id]).'">
                                        <i class="fa fa-medkit" style="color:red; "></i>
                                </a>
                            </li>

                            
                        </ul>
                    </td>

                        
                </tr>
                ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // taisan end
    //////////////////////////////////////////////////////////
    // loaiBDS start
    public function timkiem_loaiBDS(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_loaiBDS::where('ten_loaiBDS', 'like', '%'.$query.'%')
                              ->orderBy('id', 'asc')
                              ->get();
          }
          else
          {
            $data = db_loaiBDS::orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
              $output .= '
              <tr class="item-editable">
                  <td class="title" scope="row">
                      '.$row->ten_loaiBDS.'
                  </td>

                  <td class="dn-lg"></td>
                <td></td>

                <td>
                    <ul class="view_edit_delete_list mb0">

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <a href="'.route('loaiBDS.edit',['id' => $row->id]).'">
                                <span class="flaticon-edit"></span>
                            </a>
                        </li>

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <a href="'.route('loaiBDS.delete',['id' => $row->id]).'">
                                <span class="flaticon-garbage"></span>
                            </a>
                        </li>
                    </ul>
                </td>

                      
              </tr>
              ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // khoi phuc
    public function timkiem_loaiBDS_khoiphuc(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_loaiBDS::onlyTrashed()
                                ->where('ten_loaiBDS', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
          }
                             
          else
          {
            $data =db_loaiBDS::onlyTrashed()->orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
                $ngayxoa = date("A H:i || d-m-Y ",strtotime($row->deleted_at));

                $output .= '
                <tr class="item-editable">
                    <td class="title" scope="row">
                        '.$row->ten_loaiBDS.'
                    </td>

                    <td class="dn-lg"></td>
                    <td>
                        '.$ngayxoa.'
                    </td>

                    <td>
                        <ul class="view_edit_delete_list mb0">

                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="'.route('loaiBDS.khoiphuc.post',['id' => $row->id]).'">
                                        <i class="fa fa-medkit" style="color:red; "></i>
                                </a>
                            </li>

                            
                        </ul>
                    </td>

                        
                </tr>
                ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // loaiBDS end
    //////////////////////////////////////////////////////////
    // trang thai start
    public function timkiem_trangthai(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_trangthai::where('ten_trangthai', 'like', '%'.$query.'%')
                              ->orderBy('id', 'asc')
                              ->get();
          }
          else
          {
            $data = db_trangthai::orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
              $output .= '
              <tr class="item-editable">
                  <td class="title" scope="row" >
                      <span style="color:'.$row->mau_sac.'">'.$row->ten_trangthai.'</span>
                  </td>

                  <td class="dn-lg"></td>
                <td></td>

                <td>
                    <ul class="view_edit_delete_list mb0">

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <a href="'.route('trangthai.edit',['id' => $row->id]).'">
                                <span class="flaticon-edit"></span>
                            </a>
                        </li>

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <a href="'.route('trangthai.delete',['id' => $row->id]).'">
                                <span class="flaticon-garbage"></span>
                            </a>
                        </li>
                    </ul>
                </td>

                      
              </tr>
              ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // khoi phuc
    public function timkiem_trangthai_khoiphuc(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_trangthai::onlyTrashed()
                                ->where('ten_trangthai', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
          }
                             
          else
          {
            $data =db_trangthai::onlyTrashed()->orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
                $ngayxoa = date("A H:i || d-m-Y ",strtotime($row->deleted_at));

                $output .= '
                <tr class="item-editable">
                    <td class="title" scope="row">
                        '.$row->ten_trangthai.'
                    </td>

                    <td class="dn-lg"></td>
                    <td>
                        '.$ngayxoa.'
                    </td>

                    <td>
                        <ul class="view_edit_delete_list mb0">

                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="'.route('trangthai.khoiphuc.post',['id' => $row->id]).'">
                                        <i class="fa fa-medkit" style="color:red; "></i>
                                </a>
                            </li>

                            
                        </ul>
                    </td>

                        
                </tr>
                ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // trang thai end
    //////////////////////////////////////////////////////////
    // db_loaibantin start
    public function timkiem_loaibantin(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_loaibantin::where('ten_loaibantin', 'like', '%'.$query.'%')
                              ->orderBy('id', 'asc')
                              ->get();
          }
          else
          {
            $data = db_loaibantin::orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
              $output .= '
              <tr class="item-editable">
                  <td class="title" scope="row">
                      '.$row->ten_loaibantin.'
                  </td>

                  <td class="dn-lg"></td>
                <td></td>

                <td>
                    <ul class="view_edit_delete_list mb0">

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <a href="'.route('loaibantin.edit',['id' => $row->id]).'">
                                <span class="flaticon-edit"></span>
                            </a>
                        </li>

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <a href="'.route('loaibantin.delete',['id' => $row->id]).'">
                                <span class="flaticon-garbage"></span>
                            </a>
                        </li>
                    </ul>
                </td>

                      
              </tr>
              ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // khoi phuc
    public function timkiem_loaibantin_khoiphuc(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_loaibantin::onlyTrashed()
                                ->where('ten_loaibantin', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
          }
                             
          else
          {
            $data =db_loaibantin::onlyTrashed()->orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
                $ngayxoa = date("A H:i || d-m-Y ",strtotime($row->deleted_at));

                $output .= '
                <tr class="item-editable">
                    <td class="title" scope="row">
                        '.$row->ten_loaibantin.'
                    </td>

                    <td class="dn-lg"></td>
                    <td>
                        '.$ngayxoa.'
                    </td>

                    <td>
                        <ul class="view_edit_delete_list mb0">

                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="'.route('loaibantin.khoiphuc.post',['id' => $row->id]).'">
                                        <i class="fa fa-medkit" style="color:red; "></i>
                                </a>
                            </li>

                            
                        </ul>
                    </td>

                        
                </tr>
                ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // db_loaibantin end
    // Phuong thuc start
    public function timkiem_phuongthuc(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_phuongthucthanhtoan::where('ten_phuongthuc', 'like', '%'.$query.'%')
                              ->orderBy('id', 'asc')
                              ->get();
          }
          else
          {
            $data = db_phuongthucthanhtoan::orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
              $output .= '
              <tr class="item-editable">

                  <td class="title" scope="row">
                      <img style="width:80px; height:23px" 
                      src="'.asset($row->path_logo).'">
                  </td>

                  <td class="title" scope="row">
                      '.$row->ten_phuongthuc.'
                  </td>';

                  if($row->trangthai->ten_trangthai == 'Active')
                  {
                      $output .='<td class="dn-lg" style="color:'.$row->trangthai->mau_sac.'">
                                  '.$row->trangthai->ten_trangthai.'
                                </td>';
                  }
                  elseif($row->trangthai->ten_trangthai == 'Disable')
                  {
                    $output .='<td class="dn-lg" style="color:'.$row->trangthai->mau_sac.'">
                                  '.$row->trangthai->ten_trangthai.'
                                </td>';
                  }

              $output .= '<td>
                    <ul class="view_edit_delete_list mb0">

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <a href="'.route('phuongthuc.edit',['id' => $row->id]).'">
                                <span class="flaticon-edit"></span>
                            </a>
                        </li>

                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <a onclick="return  ConfirmDelete(abc);" href="'.route('phuongthuc.delete',['id' => $row->id]).'">
                                <span class="flaticon-garbage"></span>
                            </a>
                        </li>
                    </ul>
                </td>

                      
              </tr>
              ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // khoi phuc
    public function timkiem_phuongthuc_khoiphuc(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_phuongthucthanhtoan::onlyTrashed()
                                ->where('ten_phuongthuc', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
          }
                             
          else
          {
            $data =db_phuongthucthanhtoan::onlyTrashed()->orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
                $ngayxoa = date("A H:i || d-m-Y ",strtotime($row->deleted_at));
                $output .= '
                <tr class="item-editable">
                  <td class="title" scope="row">
                      <img style="width:80px; height:23px" 
                      src="'.asset($row->path_logo).'">
                  </td>

                  <td class="title" scope="row">
                      '.$row->ten_phuongthuc.'
                  </td>';

                  if($row->trangthai->ten_trangthai == 'Active')
                  {
                      $output .='<td class="dn-lg" style="color:green">
                                  '.$row->trangthai->ten_trangthai.'
                                </td>';
                  }
                  elseif($row->trangthai->ten_trangthai == 'Disable')
                  {
                    $output .='<td class="dn-lg" style="color:red">
                                  '.$row->trangthai->ten_trangthai.'
                                </td>';
                  }

                $output .= '<td>
                        '.$ngayxoa.'
                    </td>

                    <td>
                        <ul class="view_edit_delete_list mb0">

                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="'.route('phuongthuc.khoiphuc.post',['id' => $row->id]).'">
                                        <i class="fa fa-medkit" style="color:red; "></i>
                                </a>
                            </li>

                            
                        </ul>
                    </td>

                        
                </tr>
                ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // phuong thuc end
    // Ban tin start
    public function timkiem_bantin(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_bantin::where('tieu_de', 'like', '%'.$query.'%')
                              ->where('id_thanhvien', '=', Auth::user()->id)
                              ->orderBy('id', 'desc')
                              ->get();
          }
          else
          {
            $data = db_bantin::orderBy('id', 'desc')
                            ->where('id_thanhvien', '=', Auth::user()->id)
                            ->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
              $output .= '
              <tr>
                <th scope="row">
                    <div class="feat_property list favorite_page style2">
                        <div class="thumb">
                            <img class="img-whp" src="'.asset($row->bds->path_hinh).'" alt="fp1.jpg">
                        </div>
                        <div class="details">
                            <div class="tc_content">
                            <div class="row">
                                <h4 style="margin-left: 20px; margin-right:20px;">'.$row->tieu_de.'</h4>
                                ';
                                if($row->hinhthuc->ten_hinhthuc == 'Thuê')
                                {
                                    $output .='<span class="status_tag badge" style="background-color: '.$row->hinhthuc->mau_sac.'">
                                    '.$row->hinhthuc->ten_hinhthuc.'
                                  </span>';
                                }
                                elseif($row->hinhthuc->ten_hinhthuc == 'Bán')
                                {
                                  $output .='<span class="status_tag badge" style="background-color: '.$row->hinhthuc->mau_sac.'">
                                  '.$row->hinhthuc->ten_hinhthuc.'
                                </span>';
                                }

                            $output .= '
                            </div>
                                <p><span class="flaticon-placeholder"></span>'.$row->bds->dia_chi.'</p>
                                <a class="fp_price text-thm" href="#">'.number_format($row->gia_tien,0,',','.').' đ';
                                if($row->hinhthuc->ten_hinhthuc == 'Thuê')
                                {
                                    $output .='<small>/th</small></a>';
                                }
                                $output .='
                            </div>
                        </div>
                    </div>
                </th>
                <td>'.date("d-m-Y",strtotime($row->created_at)).'</td>

                <td>
                
                ';
                  if($row->trangthai->ten_trangthai == 'Đang xử lý')
                  {
                      $output .='
                      <span class="status_tag badge" style="background-color: '.$row->trangthai->mau_sac.'" >
                        '.$row->trangthai->ten_trangthai.'
                      </span>';
                  }
                  elseif($row->trangthai->ten_trangthai == 'Được phát hành')
                  {
                    $output .='
                    <span class="status_tag badge" style="background-color: '.$row->trangthai->mau_sac.'" >
                      '.$row->trangthai->ten_trangthai.'
                    </span>';
                  }

              $output .= '
                  
                </td>
                <td>'.$row->views.'</td>
                <td>
                    <ul class="view_edit_delete_list mb0">
                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="#"><span class="flaticon-edit"></span></a></li>
                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></li>
                    </ul>
                </td>
            </tr>
              ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // khoi phuc chua lam
    public function timkiem_bantin_khoiphuc(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_phuongthucthanhtoan::onlyTrashed()
                                ->where('ten_phuongthuc', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
          }
                             
          else
          {
            $data =db_phuongthucthanhtoan::onlyTrashed()->orderBy('id', 'asc')->get();
             
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
                $ngayxoa = date("A H:i || d-m-Y ",strtotime($row->deleted_at));
                $output .= '
                <tr class="item-editable">
                  <td class="title" scope="row">
                      <img style="width:80px; height:23px" 
                      src="'.asset($row->path_logo).'">
                  </td>

                  <td class="title" scope="row">
                      '.$row->ten_phuongthuc.'
                  </td>';

                  if($row->trangthai->ten_trangthai == 'Active')
                  {
                      $output .='<td class="dn-lg" style="color:green">
                                  '.$row->trangthai->ten_trangthai.'
                                </td>';
                  }
                  elseif($row->trangthai->ten_trangthai == 'Disable')
                  {
                    $output .='<td class="dn-lg" style="color:red">
                                  '.$row->trangthai->ten_trangthai.'
                                </td>';
                  }

                $output .= '<td>
                        '.$ngayxoa.'
                    </td>

                    <td>
                        <ul class="view_edit_delete_list mb0">

                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="'.route('phuongthuc.khoiphuc.post',['id' => $row->id]).'">
                                        <i class="fa fa-medkit" style="color:red; "></i>
                                </a>
                            </li>

                            
                        </ul>
                    </td>

                        
                </tr>
                ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // bantin end
     // Sanpham start
    public function timkiem_sanpham(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_sanpham::where('sanpham_ten', 'like', '%'.$query.'%')
                              ->orderBy('id', 'desc')
                              ->get();
          }
          else
          {
            $data = db_sanpham::orderBy('id', 'desc')
                            ->get();
            
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
              $output .= '
              <tr>
                <th scope="row">
                    <div class="feat_property list favorite_page style2">
                        <div class="thumb">
                            <img class="img-whp" src="'.asset($row->sanpham_path).'" alt="fp1.jpg">
                        </div>
                        <div class="details">
                            <div class="tc_content">
                              <div class="row">
                                  <h4 style="margin-left: 20px; margin-right:20px;">'.$row->sanpham_ten.'</h4>
                              </div>
                              <p><span class="fa fa-list-alt"></span> '.$row->sanpham_motangan.'</p>
                              <a class="fp_price text-thm" href="#">'.number_format($row->sanpham_gia,0,',','.').' đ
                            </div>
                        </div>
                    </div>
                </th>
                <td>'.$row->sanpham_hsd.' giờ</td>

                <td>
                    <span class="status_tag badge" style="background-color: '.$row->trangthai->mau_sac.'" >
                      '.$row->trangthai->ten_trangthai.'
                    </span>
                </td>
                <td>'.date("d-m-Y",strtotime($row->created_at)).'</td>
                <td>
                    <ul class="view_edit_delete_list mb0">
                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="'.route('sanpham.edit',['id' => $row->id]).'"><span class="flaticon-edit"></span></a></li>
                        <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="'.route('sanpham.delete',['id' => $row->id]).'"><span class="flaticon-garbage"></span></a></li>
                    </ul>
                </td>
            </tr>
              ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // khoi phuc chua lam
    public function timkiem_sanpham_khoiphuc(Request $request)
    {
        if($request->ajax())
        {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
            $data = db_phuongthucthanhtoan::onlyTrashed()
                                ->where('ten_phuongthuc', 'like', '%'.$query.'%')
                                ->orderBy('id', 'desc')
                                ->get();
          }
                            
          else
          {
            $data =db_phuongthucthanhtoan::onlyTrashed()->orderBy('id', 'asc')->get();
            
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
            foreach($data as $row)
            {
                $ngayxoa = date("A H:i || d-m-Y ",strtotime($row->deleted_at));
                $output .= '
                <tr class="item-editable">
                  <td class="title" scope="row">
                      <img style="width:80px; height:23px" 
                      src="'.asset($row->path_logo).'">
                  </td>

                  <td class="title" scope="row">
                      '.$row->ten_phuongthuc.'
                  </td>';

                  if($row->trangthai->ten_trangthai == 'Active')
                  {
                      $output .='<td class="dn-lg" style="color:green">
                                  '.$row->trangthai->ten_trangthai.'
                                </td>';
                  }
                  elseif($row->trangthai->ten_trangthai == 'Disable')
                  {
                    $output .='<td class="dn-lg" style="color:red">
                                  '.$row->trangthai->ten_trangthai.'
                                </td>';
                  }

                $output .= '<td>
                        '.$ngayxoa.'
                    </td>

                    <td>
                        <ul class="view_edit_delete_list mb0">

                            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <a href="'.route('phuongthuc.khoiphuc.post',['id' => $row->id]).'">
                                        <i class="fa fa-medkit" style="color:red; "></i>
                                </a>
                            </li>

                            
                        </ul>
                    </td>

                        
                </tr>
                ';
            }
          }
          else
          {
            $output = '
            <div>
            Chưa có dữ liệu !
            </div>
            ';
          }
          $data = array(
            'banhbao'  => $output,
            'total_data'  => $total_row
          );
  
          echo json_encode($data);
        }
    }
    // sanpham end
    
    

   
}
