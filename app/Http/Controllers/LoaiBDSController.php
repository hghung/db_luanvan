<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toastr;

use App\Models\db_loaiBDS;
class LoaiBDSController extends Controller
{
    public function list()
    {
        $list['BDS'] = db_loaiBDS::all();
        return view('luanvan.loai-BDS.list',$list);
    }

    public function add()
    {
        return view('luanvan.loai-BDS.add');
    }

    public function add_post(Request $rq)
    {
        $update =  new db_loaiBDS;
        $update->ten_loaiBDS = $rq->loaiBDS;
        $update->save();

        Toastr::success('Thêm loại bất động sản thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('loaiBDS.list');
    }

    public function edit($id)
    {
        $edit['BDS'] = db_loaiBDS::find($id);
        return view('luanvan.loai-BDS.edit',$edit);
    }


    public function edit_post($id,Request $rq)
    {
        $update = db_loaiBDS::find($id);
        $update->ten_loaiBDS = $rq->loaiBDS;
        $update->save();

        Toastr::success('Cập nhật loại bất động sản thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('loaiBDS.list');
    }


    public function delete($id){
        $BDS = db_loaiBDS::find($id);

        $delete = $BDS->delete();

        Toastr::warning('Đã xóa loại bất động sản', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    public function list_restore()
    {   
        // lấy ra nhưng soft đã bị xóa
        $BDS['khoiphuc'] = db_loaiBDS::onlyTrashed()->get();


        return view('luanvan.loai-BDS.restore',$BDS);
        
    }

    public function restore($id)
    {   
        //withTrashed mới hiêu dc hàng trong delete_at bị xóa và khôi phục
        $BDS = db_loaiBDS::withTrashed()->find($id);
        $restore = $BDS->restore();
        Toastr::success('Khôi phục thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
    	return  redirect()->route('loaiBDS.list');
    }

}
