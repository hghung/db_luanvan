<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toastr;
use App\Models\db_phuongthucthanhtoan;
use App\Models\db_trangthai;

class PhuongthucController extends Controller
{
    public function list()
    {
        $list['phuongthuc'] = db_phuongthucthanhtoan::all();
        return view('luanvan.phuong-thuc-thanh-toan.list',$list);
    }

    public function add()
    {
        return view('luanvan.phuong-thuc-thanh-toan.add');
    }

    public function add_post(Request $rq)
    {
        $add =  new db_phuongthucthanhtoan;
        $add->ten_phuongthuc = $rq->phuongthuc;
        $add->id_trangthai = $rq->trangthai;

        if($rq->hasFile('logo'))
        {
            $file = $rq->file('logo');
            // echo $file;die;
            // kiểm tra  size
            $size = $file->getsize();
            if($size > 1024*1024)
            {
                // echo "size quá lớn chọn lại";
                return redirect()->back()->with('size','size quá lớn chọn lại');
            }
            // echo "banhbao";die;

            //kiểm tra đuôi, lấy ra đuôi file getClientOriginalExtension()
            $duoi_file = $file->getClientOriginalExtension();
            //tạo 1 mang arr để sử dụng in_array so sanh
            $arr_duoifile = ['png','jpg','jpeg','PNG','JPG','JPEG'];

            if(!in_array($duoi_file, $arr_duoifile))
            {
                // echo "Đuôi file size xin mời định dạng lại";
                return redirect()->back()->with('duoi_file','Bạn chỉ được thêm file có đuôi là JPG, PNG, JPEG');
            }
            // echo "banhbao";die;

            // radom tên hinh ảnh, để lấy ra không bị trùng
            //,... getClientOriginalName() lấy ra tên
            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(5)."_".$name;

            // echo $hinh_anh;die;
            while(file_exists('public/upload/phuong-thuc'.$hinh_anh))
            {
                $hinh_anh = str_random(4)."_".$name;
            }
            // echo $name; die; 
            $file->move('public/upload/phuong-thuc',$hinh_anh);
            $add->path_logo = 'public/upload/phuong-thuc/'.$hinh_anh;
        
        }

        $add->save();

        Toastr::success('Thêm phương thức thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('phuongthuc.list');
    }

    // //////////////////////////////
    public function edit($id)
    {
        $edit['phuongthuc'] = db_phuongthucthanhtoan::find($id);
        return view('luanvan.phuong-thuc-thanh-toan.edit',$edit);
    }


    public function edit_post($id,Request $rq)
    {
        $update = db_phuongthucthanhtoan::find($id);
        $update->ten_phuongthuc = $rq->phuongthuc;
        $update->id_trangthai = $rq->trangthai;

        if($rq->hasFile('logo'))
        {
            $file = $rq->file('logo');
            // echo $file;die;
            // kiểm tra  size
            $size = $file->getsize();
            if($size > 1024*1024)
            {
                // echo "size quá lớn chọn lại";
                return redirect()->back()->with('size','size quá lớn chọn lại');
            }
            // echo "banhbao";die;

            //kiểm tra đuôi, lấy ra đuôi file getClientOriginalExtension()
            $duoi_file = $file->getClientOriginalExtension();
            //tạo 1 mang arr để sử dụng in_array so sanh
            $arr_duoifile = ['png','jpg','jpeg','PNG','JPG','JPEG'];

            if(!in_array($duoi_file, $arr_duoifile))
            {
                // echo "Đuôi file size xin mời định dạng lại";
                return redirect()->back()->with('duoi_file','Bạn chỉ được thêm file có đuôi là JPG, PNG, JPEG');
            }
            // echo "banhbao";die;

            // radom tên hinh ảnh, để lấy ra không bị trùng
            //,... getClientOriginalName() lấy ra tên
            $name = $file->getClientOriginalName();
            $hinh_anh = str_random(5)."_".$name;

            // echo $hinh_anh;die;
            while(file_exists('public/upload/phuong-thuc'.$hinh_anh))
            {
                $hinh_anh = str_random(4)."_".$name;
            }
            // echo $name; die; 
            if($update->path_logo){
                unlink($update->path_logo);
                $file->move('public/upload/phuong-thuc',$hinh_anh);
                $update->path_logo = 'public/upload/phuong-thuc/'.$hinh_anh;
            }
            else
            {   
                $file->move('public/upload/phuong-thuc',$hinh_anh);
                $update->path_logo = 'public/upload/phuong-thuc/'.$hinh_anh;
            }
        
        }
        $update->save();

        Toastr::success('Cập nhật phương thức thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('phuongthuc.list');
    }


    public function delete($id){
        $phuongthuc = db_phuongthucthanhtoan::find($id);

        $delete = $phuongthuc->delete();

        Toastr::warning('Đã xóa phương thức', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    public function list_restore()
    {   
        // lấy ra nhưng soft đã bị xóa
        $phuongthuc['khoiphuc'] = db_phuongthucthanhtoan::onlyTrashed()->get();


        return view('luanvan.phuong-thuc-thanh-toan.restore',$phuongthuc);
        
    }

    public function restore($id)
    {   
        //withTrashed mới hiêu dc hàng trong delete_at bị xóa và khôi phục
        $phuongthuc = db_phuongthucthanhtoan::withTrashed()->find($id);
        $restore = $phuongthuc->restore();
        Toastr::success('Khôi phục thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
    	return  redirect()->route('phuongthuc.list');
    }
}
