<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toastr;
use App\Models\db_sanpham;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class SanphamController extends Controller
{
    public function list()
    {
        $list['sanpham'] = db_sanpham::all();
        return view('luanvan.san-pham.list',$list);
    }

    public function add()
    {
        return view('luanvan.san-pham.add');
    }

    public function checkSlug(Request $rq)
    {
       $slug = SlugService::createSlug(db_sanpham::class, 'slug', $rq->title);
       return response()->json(['slug' => $slug]);
    }
    

    public function add_post(Request $rq)
    {
        $money= str_replace(array('.',','), array('',''), $rq->giaban);


        $add =  new db_sanpham;
        $add->sanpham_ten = $rq->name;
        $add->slug	        = $rq->slug;
        $add->sanpham_motangan = $rq->mota;
        $add->sanpham_gia = $money;
        $add->sanpham_hsd = $rq->hsd;
        $add->id_trangthai  = $rq->trangthai;

        if($rq->hasFile('hinhanh'))
        {
            $file = $rq->file('hinhanh');
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
            while(file_exists('public/upload/san-pham'.$hinh_anh))
            {
                $hinh_anh = str_random(4)."_".$name;
            }
            // echo $name; die; 
            $file->move('public/upload/san-pham',$hinh_anh);
            $add->sanpham_path = 'public/upload/san-pham/'.$hinh_anh;
        
        }


        $add->save();

        Toastr::success('Thêm sản phẩm thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('sanpham.list');
    }

    public function edit($id)
    {
        $edit['sanpham'] = db_sanpham::find($id);
        return view('luanvan.san-pham.edit',$edit);
    }


    public function edit_post($id,Request $rq)
    {
        $money= str_replace(array('.',','), array('',''), $rq->giaban);

        $update = db_sanpham::find($id);
        $update->sanpham_ten = $rq->name;
        $update->slug	        = $rq->slug;
        $update->sanpham_motangan = $rq->mota;
        $update->sanpham_gia = $money;
        $update->sanpham_hsd = $rq->hsd;
        $update->id_trangthai  = $rq->trangthai;

        if($rq->hasFile('hinhanh'))
        {
            $file = $rq->file('hinhanh');
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
            while(file_exists('public/upload/san-pham'.$hinh_anh))
            {
                $hinh_anh = str_random(4)."_".$name;
            }
            // echo $name; die; 
            if($update->sanpham_path){
                unlink($update->sanpham_path);
                $file->move('public/upload/san-pham',$hinh_anh);
                $update->sanpham_path = 'public/upload/san-pham/'.$hinh_anh;
            }
            else
            {   
                $file->move('public/upload/san-pham',$hinh_anh);
                $update->sanpham_path = 'public/upload/san-pham/'.$hinh_anh;
            }
        
        }
        $update->save();

        Toastr::success('Cập nhật sản phẩm thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('sanpham.list');
    }


    public function delete($id){
        $sanpham = db_sanpham::find($id);

        $delete = $sanpham->delete();

        Toastr::warning('Đã xóa sản phẩm', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    public function list_restore()
    {   
        // lấy ra nhưng soft đã bị xóa
        $sanpham['khoiphuc'] = db_sanpham::onlyTrashed()->get();


        return view('luanvan.san-pham.restore',$sanpham);
        
    }

    public function restore($id)
    {   
        //withTrashed mới hiêu dc hàng trong delete_at bị xóa và khôi phục
        $sanpham = db_sanpham::withTrashed()->find($id);
        $restore = $sanpham->restore();
        Toastr::success('Khôi phục thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
    	return  redirect()->route('sanpham.list');
    }
}
