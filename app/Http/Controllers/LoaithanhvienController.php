<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toastr;

use App\Models\db_loaithanhvien;
class LoaithanhvienController extends Controller
{
    public function list()
    {
        $vaitro['medal'] = db_loaithanhvien::all();
        return view('luanvan.loai-thanhvien.list',$vaitro);
    }
    public function add_post(Request $rq)
    {
        $update =  new db_loaithanhvien;
        $update->vai_tro = $rq->vai_tro;

        if($rq->hasFile('path'))
        {
            $file = $rq->file('path');
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
            while(file_exists('public/upload/huy-hieu'.$hinh_anh))
            {
                $hinh_anh = str_random(4)."_".$name;
            }
            // echo $name; die; 
            $file->move('public/upload/huy-hieu',$hinh_anh);
            $update->avatar = 'public/upload/huy-hieu/'.$hinh_anh;
           
        
        }
        
        $update->save();

        Toastr::success('Cập nhật vai tro thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $edit['medal'] = db_loaithanhvien::find($id);
        return view('luanvan.loai-thanhvien.edit',$edit);
    }


    public function edit_post($id,Request $rq)
    {
        $update = db_loaithanhvien::find($id);
        $update->loai_thanhvien = $rq->loaithanhvien;

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
            while(file_exists('public/upload/huy-hieu'.$hinh_anh))
            {
                $hinh_anh = str_random(4)."_".$name;
            }
            // echo $name; die; 
            if($update->logo){
                unlink($update->logo);
                $file->move('public/upload/huy-hieu',$hinh_anh);
                $update->logo = 'public/upload/huy-hieu/'.$hinh_anh;
            }
            else
            {   
                $file->move('public/upload/huy-hieu',$hinh_anh);
                $update->logo = 'public/upload/huy-hieu/'.$hinh_anh;
            }
        
        }
        
        $update->save();

        Toastr::success('Cập nhật loại thành viên thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('loaithanhvien.list');
    }
}
