<?php

namespace App\Http\Controllers;

use Request2;
use Illuminate\Http\Request;

Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Toastr;
use App\User;
use Illuminate\Support\Facades\Input;

class DangnhapController extends Controller
{   

    public function post_login(Request $lg)
    {
    	
        $username =  $lg->username;
        $password = $lg->password;
        // echo $lg->username;
        // echo $lg->password;/
        // die;
        if(Auth::attempt(['username'=>$username,'password'=>$password]))
        {
            if(Auth::user()->id_trangthai == 1)
            {
                // echo "Thanh Cong";die;
                if(!Auth::user()->ho && !Auth::user()->ten)
                {
                    Toastr::success('Xin chào '.Auth::user()->username.'', 'Welcome', ["positionClass" => "toast-top-right"]);
                    return redirect()->back();
                }
                else
                {
                    if(Auth::user()->gioi_tinh == 1)
                    {
                        Toastr::success('Xin chào Anh '.Auth::user()->ten.'', 'Welcome', ["positionClass" => "toast-top-right"]);
                        return redirect()->back();
                    }
                    elseif(Auth::user()->gioi_tinh == 2)
                    {
                        Toastr::success('Xin chào Chị '.Auth::user()->ten.'', 'Welcome', ["positionClass" => "toast-top-right"]);
                        return redirect()->back();
                    }
                    
                }
            }
            else
            {
                Toastr::error('Tài khoản bạn đã bị khóa !', 'Thông báo', ["positionClass" => "toast-top-right"]);
                Auth::logout();
                return redirect()->back();

            }
        }
        else
        {
            Toastr::error('Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại !', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
        }
            
    }

    public function logout()
    {
        Auth::logout();
        Toastr::info('Đăng xuất thành công !', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->route('home1');
    }
    
}
