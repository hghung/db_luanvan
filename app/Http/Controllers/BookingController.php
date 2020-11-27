<?php

namespace App\Http\Controllers;

use App\Models\db_datlich;
use App\Models\db_bantin;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use Toastr;

use Carbon\Carbon;
class BookingController extends Controller
{
    public function datlich(Request $rq, $id)
    {
        if(!$rq->nhac_lich && !$rq->duyet )
        {
            $bantin = db_bantin::find($id);
            $format_ngay = date('Y-m-d', strtotime($rq->ngay_hen));
            $datlich = new db_datlich;
            $datlich->noi_dung = $rq->noi_dung;
            $datlich->ngay_hen = $format_ngay;
            $datlich->gio_hen = $rq->gio_hen;
            $datlich->ngay_tao = Carbon::now('Asia/Ho_Chi_Minh');
            $datlich->cap_nhat = Carbon::now('Asia/Ho_Chi_Minh');
            $datlich->id_trangthai = 1; // dang xu li
            $datlich->id_bantin = $id;
            $datlich->id_nguoidang = $bantin->user->id;
            $datlich->id_khachhang = Auth::user()->id;
            $datlich->save();
            Toastr::success('Đặt lịch thành công chờ người đăng xử lí', 'Thông báo', ["positionClass" => "toast-top-right"]);
        }
        elseif($rq->nhac_lich)
        {
            $data = db_datlich::where('id',$rq->nhac_lich)->update(['cap_nhat'=>Carbon::now('Asia/Ho_Chi_Minh')]);
            Toastr::info('Đã nhắc lịch hẹn với người đăng', 'Thông báo', ["positionClass" => "toast-top-right"]);
        }
        elseif($rq->duyet)
        {
            Toastr::success('Lịch hẹn đã được duyệt mời bạn đúng giờ', 'Thông báo', ["positionClass" => "toast-top-right"]);
        }

        return redirect()->back();
        
    }

    public function list()
    {
        $datlich['datlich'] = db_datlich::where('id_nguoidang','=',Auth::user()->id)
        ->orderBy('cap_nhat','DESC')
        ->get();
        return view('luanvan.dat-lich.list',$datlich);
    }


    public function phe_duyet($id)
    {
        $data = db_datlich::where('id',$id)->update(['id_trangthai'=>2]);
        Toastr::success('Đã phê duyệt', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function huy_duyet($id)
    {
        $data = db_datlich::where('id',$id)->update(['id_trangthai'=>3]);
        Toastr::success('Đã phê duyệt', 'Thông báo', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }


}
