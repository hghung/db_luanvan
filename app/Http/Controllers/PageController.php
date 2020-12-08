<?php

namespace App\Http\Controllers;

use App\Models\db_bantin;
use App\Models\db_ct_taisan;
use App\Models\db_ct_thuoctinh;
use App\Models\db_datlich;
use App\Models\db_hinhanh;
use App\Models\Rating;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Toastr;

use App\User;
use App\Views;

use Carbon\Carbon;
Use Illuminate\Support\Facades\Auth;
use QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;


class PageController extends Controller
{
    
    
    public function home()
    {
        // $home['blog'] = db_tintuc::where('id_trangthai','=',2) // duyet mới hiện thị
        //                         ->orderBy('views', 'desc') // giảm dần
        //                         ->take(3) // lấy ra 3
        //                         ->get();
        return view('luanvan.index');
        
    }

    public function list()
    {
        $bantin['bantin'] = db_bantin::orderBy('id', 'desc') // giảm dần
                                ->get();
        Carbon::setLocale('vi'); // sư dụng đây nên giờ nó hiêu là tiên việt
        return view('luanvan.list.list',$bantin);
        
    }


    public function single(db_bantin $slug)
    {
        $bantin['bantin'] = db_bantin::find($slug->id);

        $bantin['qrcode'] = QrCode::size(88)->geo($bantin['bantin']->bds->vido, $bantin['bantin']->bds->kinhdo);

        $bantin['hinhanh3'] = db_hinhanh::where('id_batdongsan','=',$bantin['bantin']->bds->id)->take(4)->get();

        $bantin['thuoctinh'] = db_ct_thuoctinh::where('id_batdongsan','=',$bantin['bantin']->bds->id)->get(); // duyet mới hiện thị

        $bantin['taisan'] = db_ct_taisan::where('id_batdongsan','=',$bantin['bantin']->bds->id)->get(); // duyet mới hiện thị

        if(Auth::check())
        {
            $bantin['datlich'] = db_datlich::where('id_khachhang','=',Auth::user()->id)
                                        ->where('id_bantin','=',$slug->id)
                                        ->where ('id_trangthai','!=',3)
                                        ->get();
        }
        
        // luot xem     
        views($bantin['bantin'])
        ->cooldown(Carbon::now()->addMinutes(1))
        ->record();
    
        $data = db_bantin::where('id',$slug->id)->update(['views'=>views($bantin['bantin'])->count()]);

        return view('luanvan.list.single',$bantin);
        
    }

    

    

   
}
