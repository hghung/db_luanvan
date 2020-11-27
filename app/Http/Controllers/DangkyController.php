<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Request2;
use App\User;

class DangkyController extends Controller
{
    public function checkusername() 
    {   
        // echo  Request2::get('taikhoan');die;
        if(Request2::ajax()) {
            $user2 = User::where('username', Request2::get('taikhoan'))->get();
            if($user2->count()) {
                return Response()->json(array('msg' => 'true'));
            }
            return Response()->json(array('msg' => 'false'));
        }
    }

    public function checkemail() 
    {
        // echo Request2::get('email');die;
        if(Request2::ajax()) {
            $email = User::where('email', Request2::get('email'))->get();
            if($email->count()) {
                return Response()->json(array('msg' => 'true'));
            }
            return Response()->json(array('msg' => 'false'));
        }
    }

    public function post_reg(Request $reg)
    {

        $account = new User;
        $account->username = $reg->taikhoan;
        $account->email = $reg->email;
        $account->password = bcrypt($reg->password);
        $account->id_vaitro = $reg->vaitro;
        $account->id_loaithanhvien = '1';
        $account->id_trangthai  = '1';
        // echo $account; die;
        
        $account->save();

        if($account->save()){ 
            $arr = array('msg' => 'Bạn đã đăng ký thành công', 'status' => true);
        }
        return Response()->json($arr);
        
    }

    
}
