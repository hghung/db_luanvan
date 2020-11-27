<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toastr;

use App\Models\db_trangthai;
class TrangthaiController extends Controller
{
    public function list()
    {
        $list['trangthai'] = db_trangthai::all();
        return view('luanvan.trang-thai.list',$list);
    }

    public function add()
    {
        return view('luanvan.trang-thai.add');
    }

    public function add_post(Request $rq)
    {
        $update =  new db_trangthai;
        $update->ten_trangthai = $rq->trangthai;
        $update->mau_sac = $rq->color;

        $update->save();

        Toastr::success('Thêm trạng thái thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('trangthai.list');
    }

    public function edit($id)
    {
        $edit['trangthai'] = db_trangthai::find($id);
        return view('luanvan.trang-thai.edit',$edit);
    }


    public function edit_post($id,Request $rq)
    {
        $update = db_trangthai::find($id);
        $update->ten_trangthai = $rq->trangthai;
        $update->mau_sac = $rq->color;

        $update->save();

        Toastr::success('Cập nhật trạng thái thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('trangthai.list');
    }


    public function delete($id){
        $trangthai = db_trangthai::find($id);

        $delete = $trangthai->delete();

        Toastr::warning('Đã xóa trạng thái', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    public function list_restore()
    {   
        // lấy ra nhưng soft đã bị xóa
        $trangthai['khoiphuc'] = db_trangthai::onlyTrashed()->get();


        return view('luanvan.trang-thai.restore',$trangthai);
        
    }

    public function restore($id)
    {   
        //withTrashed mới hiêu dc hàng trong delete_at bị xóa và khôi phục
        $trangthai = db_trangthai::withTrashed()->find($id);
        $restore = $trangthai->restore();
        Toastr::success('Khôi phục thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
    	return  redirect()->route('trangthai.list');
    }

}
