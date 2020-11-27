<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toastr;

use App\Models\db_taisan;
class TaisanController extends Controller
{
    public function list()
    {
        $list['taisan'] = db_taisan::all();
        return view('luanvan.tai-san.list',$list);
    }

    public function add()
    {
        return view('luanvan.tai-san.add');
    }

    public function add_post(Request $rq)
    {
        $update =  new db_taisan;
        $update->ten_taisan = $rq->taisan;
        $update->save();

        Toastr::success('Thêm tài sản thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('taisan.list');
    }

    public function edit($id)
    {
        $edit['taisan'] = db_taisan::find($id);
        return view('luanvan.tai-san.edit',$edit);
    }


    public function edit_post($id,Request $rq)
    {
        $update = db_taisan::find($id);
        $update->ten_taisan = $rq->taisan;
        $update->save();

        Toastr::success('Cập nhật tải sản thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('taisan.list');
    }


    public function delete($id){
        $taisan = db_taisan::find($id);

        $delete = $taisan->delete();

        Toastr::warning('Đã xóa tài sản', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    public function list_restore()
    {   
        // lấy ra nhưng soft đã bị xóa
        $taisan['khoiphuc'] = db_taisan::onlyTrashed()->get();


        return view('luanvan.tai-san.restore',$taisan);
        
    }

    public function restore($id)
    {   
        //withTrashed mới hiêu dc hàng trong delete_at bị xóa và khôi phục
        $taisan = db_taisan::withTrashed()->find($id);
        $restore = $taisan->restore();
        Toastr::success('Khôi phục thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
    	return  redirect()->route('taisan.list');
    }

}
