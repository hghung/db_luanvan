<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Support\Facades\Hash;

use Toastr;
use Artisan;

use App\Models\Province;
use App\Models\District;
use App\Models\Ward;



use Request2;


class TaikhoanController extends Controller
{
    
    public function dashbord()
    {
        return view('luanvan.tai-khoan.dashbord');
    }
    
    public function profile()
    {
        $profile['profile'] = User::where('id','=',Auth::user()->id)->get();
        $profile['province'] = Province::all();
        $profile['district'] = District::all();
        $profile['ward']     = Ward::all();

        return view('luanvan.tai-khoan.profile',$profile);
    }

    public function profile_update(Request $rq)
    {
        $update = User::find(Auth::user()->id);
        $update->name = $rq->ho. " " .$rq->ten;
        $update->ho = $rq->ho;
        $update->ten = $rq->ten;
        $update->email = $rq->email;
        $update->dien_thoai = $rq->phone;
        $update->gioi_tinh = $rq->gioitinh;
        $update->ngay_sinh = $rq->ngaysinh;
        $update->gioi_thieu = $rq->gioithieu;
        $update->dia_chi = $rq->diachi;
        $update->id_phuongxa =  $rq->phuongxa;

        if($rq->hasFile('avatar'))
        {
            $file = $rq->file('avatar');
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
            while(file_exists('public/upload/avatar'.$hinh_anh))
            {
                $hinh_anh = str_random(4)."_".$name;
            }
            // echo $name; die; 
            if($update->avatar){
                unlink($update->avatar);
                $file->move('public/upload/avatar',$hinh_anh);
                $update->avatar = 'public/upload/avatar/'.$hinh_anh;
            }
            else
            {   
                $file->move('public/upload/avatar',$hinh_anh);
                $update->avatar = 'public/upload/avatar/'.$hinh_anh;
            }
        
        }
        
        $update->save();

        Toastr::success('Cập nhật thông tin thành công ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function checkpassword()
    {
        $oldPassword = Request2::get('matkhaucu');
        if(!Hash::check($oldPassword, Auth::user()->password))
        {
            return Response()->json(array('msg' => 'true'));
        }
        return Response()->json(array('msg' => 'false'));
        
    }


    public function password_update(Request $rq)
    {
        $update = User::find(Auth::user()->id);
        $update->password = bcrypt($rq->password_new);
        $update->save();

        if($update->save()){ 
            $arr = array('msg' => 'Cập nhật mật khẩu thành công', 'status' => true);
        }
        return Response()->json($arr);
    }

    // ajax
    public function ajax_district($id_province)
    {

        // $this->url->to('/');
        // dd($this);
        $quanhuyen = District::where('province_id',$id_province)->get();
        foreach($quanhuyen as $dt)
        {
             echo "<option value='".$dt->id."'>".$dt->district_prefix." ".$dt->district_name."</option>";
            // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
        }
    }

    public function ajax_ward($id_ward)
    {
        $phuongxa = Ward::where('district_id',$id_ward)->get();
        foreach($phuongxa as $wd)
        {
             echo "<option value='".$wd->id."'>".$wd->ward_prefix." ".$wd->ward_name."</option>";
            // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
        }
    }


   

}
