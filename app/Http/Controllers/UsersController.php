<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Models\db_user;
use App\Models\db_vaitro;
use App\Models\db_baotri;

use App\Models\db_quanhuyen;
use App\Models\db_phuongxa;
use App\Models\db_diachi;

use Toastr;
use Artisan;
class UsersController extends Controller
{
    public function profile()
    {
        // phải khai bao như này nếu không nhân viên bấm vào 
        // kiêm tra hồ sơ sẽ thông tin của nhân viên chứ ko phải user này
        $id = Auth::user()->id;
        $user['profile'] = User::find($id);
        $user['baotri'] = db_baotri::where('id_khachhang','=',$id)
                            ->orwhere('id_trangthai','=',6)
                            ->count();
        // echo $baotri;die;
        return view('admin.Users.profile',$user);
        
    }

    public function list()
    {
        $user['user'] = User::all();
        return view('admin.Users.list',$user);
        
    }

    public function get_add()
    {
        $db['quanhuyen'] = db_quanhuyen::all();
        $db['phuongxa'] = db_phuongxa::all();
        $db['vaitro'] = db_vaitro::all();

        return view('admin.Users.add',$db);
        
    }

    // ajax
    public function ajax_ward($id_ward)
    {
        $phuongxa = db_phuongxa::where('district_id',$id_ward)->get();
        foreach($phuongxa as $wd)
        {
             echo "<option value='".$wd->id."'>".$wd->ward_prefix." ".$wd->ward_name."</option>";
            // kiểm tra xem nó showw ra đúng không Ntkd@@/ajax/loainho/id(vd: 1 2 3 4)
        }
    }



    // Xử lý
    public function post_add(Request $users)
    {
        $user = new db_user;
        $user->ho_ten = $users->name;
        $user->sdt = $users->phone;
        $user->cmnd = $users->cmnd;
        $user->email = $users->email;
        $user->nam_sinh = $users->birthday;

        // start avatar
        if($users->hasFile('avatar'))
        {
            $file = $users->file('avatar');
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
            $file->move('public/upload/avatar',$hinh_anh);
            $user->avatar = $hinh_anh;

            // if($user->kh_avatar){
            //     unlink('public/upload/avatar/'.$user->kh_avatar);
            //     $user->kh_avatar = $hinh_anh;
            // }
            // else
            // {   
            //     $user->kh_avatar = $hinh_anh;
            // }
        
        }
        else
        {
            $user->kh_avatar = "";
        }

        // end avatar
        // dd($user);
        $user->save();
        $user->ma_user = "USER-0".$user->id;
	    $user->save();

        $taikhoan = new User;
        $taikhoan->password =  bcrypt($users->password);
        $taikhoan->trang_thai = 1;
        $taikhoan->id_user  = $user->id;

        if(Auth::user()->id_vaitro == 1)
        {
            $taikhoan->id_vaitro = $users->vaitro;
            $taikhoan->save();
            if($taikhoan->id_vaitro == 1){
                $taikhoan->username = "ADMIN-000".$user->id;
            }
            elseif($taikhoan->id_vaitro == 2){
                $taikhoan->username = "db_nv_0".$user->id;
            }
            elseif($taikhoan->id_vaitro == 3){
                $taikhoan->username = "db_kt_0".$user->id;
            }
            elseif($taikhoan->id_vaitro == 4){
                $taikhoan->username = "db_user_0".$user->id;
            }
            $taikhoan->save();
        }
        else{
            $taikhoan->id_vaitro = 4;
            $taikhoan->save();
            $taikhoan->username = "db_user_0".$user->id;
            $taikhoan->save();
        }
        
        // ///////////////////////////
        $diachi = new db_diachi;
        $diachi->lat = $users->lat;
        $diachi->lng = $users->lng;
        $diachi->dia_chi = $users->diachi;
        $diachi->id_quanhuyen  = $users->quanhuyen;
        $diachi->id_phuongxa  = $users->phuongxa;
        $diachi->id_user   = $user->id;
        // dd($diachi);
        $diachi->save();

        return redirect()->route('users.list');
        
    }

    // //////////////////////////
    public function get_edit($id)
    {   
        $edit['edit'] = User::find($id);
        $edit['vaitro'] = db_vaitro::all();
        $edit['quanhuyen'] = db_quanhuyen::all();
        $edit['phuongxa'] = db_phuongxa::all();
        return view('admin.Users.edit',$edit);
    }

    public function post_edit(Request $users, $id)
    {   
        if(Auth::user()->id_vaitro == 4)
        {
            if($users->password)
            {
                $this->validate($users,[
                    'password' => 'required',
                    'confirmpassword' => 'required|same:password',
                ],[
                    'password.required' => 'Bạn chưa nhập mật khẩu !',
                    'confirmpassword.required' => 'Bạn chưa nhập lại mật khẩu !',
                    'confirmpassword.same' => 'Nhập lại mật khẩu không trùng khớp !'
                ]);
            }
            
        }
        
        $user =  db_user::find($id);
        $user->ho_ten = $users->name;
        $user->sdt = $users->phone;
        $user->cmnd = $users->cmnd;
        $user->email = $users->email;
        $user->nam_sinh = $users->birthday;
        
        // start avatar
        if($users->hasFile('avatar'))
        {
            $file = $users->file('avatar');
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
            $file->move('public/upload/avatar',$hinh_anh);
            if($user->avatar){
                unlink('public/upload/avatar/'.$user->avatar);
                $user->avatar = $hinh_anh;


            }
            else
            {
                echo "BanhBao";die;

                $user->avatar = $hinh_anh;

            }
            
        }
        // end avatar
        $user->save();

        $taikhoan = User::find($user->user2->id);
        if($users->password)
        {
            $taikhoan->password =  bcrypt($users->password);
        }
        $taikhoan->trang_thai = 1;
        $taikhoan->id_user  = $user->id;

        if(Auth::user()->id_vaitro == 1)
        {
            $taikhoan->id_vaitro = $users->vaitro;
            $taikhoan->save();
            if($taikhoan->id_vaitro == 1){
                $taikhoan->username = "ADMIN-000".$user->id;
            }
            elseif($taikhoan->id_vaitro == 2){
                $taikhoan->username = "db_nv_0".$user->id;
            }
            elseif($taikhoan->id_vaitro == 3){
                $taikhoan->username = "db_kt_0".$user->id;
            }
            elseif($taikhoan->id_vaitro == 4){
                $taikhoan->username = "db_user_0".$user->id;
            }
            $taikhoan->save();
        }
        // cập nhật thì ko cần else
        // else{
        //     $taikhoan->id_vaitro = 4;
        //     $taikhoan->save();
        //     $taikhoan->username = "db_user_0".$user->id;
        //     $taikhoan->save();
        // }
        
        // ///////////////////////////
        $diachi = db_diachi::find($user->diachi->id);
        $diachi->lat = $users->lat;
        $diachi->lng = $users->lng;
        $diachi->dia_chi = $users->diachi;
        $diachi->id_quanhuyen  = $users->quanhuyen;
        $diachi->id_phuongxa  = $users->phuongxa;
        $diachi->id_user   = $user->id;
        // dd($diachi);
        $diachi->save();
        if(Auth::user()->id_vaitro == 3 || Auth::user()->id_vaitro == 4)
        {
            return redirect()->route('users.profile');
        }
        else
        {
            return redirect()->route('users.list');
        }

    }




    // ///////////////////////////////
    public function update_mk($id)
    {
        $taikhoan = User::find($id);
        $taikhoan->password =  bcrypt('123');
        $taikhoan->save();
    }

    

   

}
