<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toastr;

use App\Models\db_thuoctinh;
class ThuoctinhController extends Controller
{
    public function list()
    {
        $list['thuoctinh'] = db_thuoctinh::all();
        return view('luanvan.thuoc-tinh.list',$list);
    }

    public function add()
    {
        return view('luanvan.thuoc-tinh.add');
    }

    public function add_post(Request $rq)
    {
        $update =  new db_thuoctinh;
        $update->ten_thuoctinh = $rq->thuoctinh;
        $update->save();

        Toastr::success('Thêm thuộc tính thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('thuoctinh.list');
    }

    public function edit($id)
    {
        $edit['thuoctinh'] = db_thuoctinh::find($id);
        return view('luanvan.thuoc-tinh.edit',$edit);
    }


    public function edit_post($id,Request $rq)
    {
        $update = db_thuoctinh::find($id);
        $update->ten_thuoctinh = $rq->thuoctinh;
        $update->save();

        Toastr::success('Cập nhật thuộc tính thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('thuoctinh.list');
    }


    public function delete($id){
        $thuoctinh = db_thuoctinh::find($id);

        $delete = $thuoctinh->delete();

        Toastr::warning('Đã xóa thuộc tính', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    public function list_restore()
    {   
        // lấy ra nhưng soft đã bị xóa
        $thuoctinh['khoiphuc'] = db_thuoctinh::onlyTrashed()->get();


        return view('luanvan.thuoc-tinh.restore',$thuoctinh);
        
    }

    public function restore($id)
    {   
        //withTrashed mới hiêu dc hàng trong delete_at bị xóa và khôi phục
        $thuoctinh = db_thuoctinh::withTrashed()->find($id);
        $restore = $thuoctinh->restore();
        Toastr::success('Khôi phục thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
    	return  redirect()->route('thuoctinh.list');
    }

}
