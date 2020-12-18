<?php

namespace App\Http\Controllers;
Use Illuminate\Support\Facades\Auth;
use Toastr;

use Illuminate\Http\Request;
use Laravelista\Comments\Comment;

class DanhgiaController extends Controller
{
    public function index()
    {
        $review = Comment::where('commenter_id','=',Auth::user()->id)->orderBy('id','desc')->paginate(3);
        return view('luanvan.danh-gia.list',compact('review'));
    }


    public function delete($id)
    {
       $delete = Comment::destroy($id);

        Toastr::warning('Đã xóa đánh giá', 'Thông báo', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }
}
