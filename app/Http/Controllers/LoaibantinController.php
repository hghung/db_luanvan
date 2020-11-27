<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toastr;

use App\Models\db_loaibantin;
class LoaibantinController extends Controller
{
    public function list()
    {
        $list['loaibantin'] = db_loaibantin::all();
        return view('luanvan.loai-bantin.list',$list);
    }

    public function add()
    {
        return view('luanvan.loai-bantin.add');
    }

    public function add_post(Request $rq)
    {
        $update =  new db_loaibantin;
        $update->ten_loaibantin = $rq->loaibantin;
        $update->save();

        Toastr::success('Thêm loại bản tin thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('loaibantin.list');
    }

    public function edit($id)
    {
        $edit['loaibantin'] = db_loaibantin::find($id);
        return view('luanvan.loai-bantin.edit',$edit);
    }


    public function edit_post($id,Request $rq)
    {
        $update = db_loaibantin::find($id);
        $update->ten_loaibantin = $rq->loaibantin;
        $update->save();

        Toastr::success('Cập nhật loại bản tin thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('loaibantin.list');
    }


    public function delete($id){
        $loaibantin = db_loaibantin::find($id);

        $delete = $loaibantin->delete();

        Toastr::warning('Đã xóa loại bản tin', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    public function list_restore()
    {   
        // lấy ra nhưng soft đã bị xóa
        $loaibantin['khoiphuc'] = db_loaibantin::onlyTrashed()->get();


        return view('luanvan.loai-bantin.restore',$loaibantin);
        
    }

    public function restore($id)
    {   
        //withTrashed mới hiêu dc hàng trong delete_at bị xóa và khôi phục
        $loaibantin = db_loaibantin::withTrashed()->find($id);
        $restore = $loaibantin->restore();
        Toastr::success('Khôi phục thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
    	return  redirect()->route('loaibantin.list');
    }

}
