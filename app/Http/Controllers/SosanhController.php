<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\db_bantin;
use App\Models\db_ct_taisan;


use Cart;
use Toastr;

class SosanhController extends Controller
{
    public function list()
    {
        $data['cart'] = Cart::content();
        // dd($data);
    	return view('luanvan.so-sanh.list',$data);
    }

    public function addCompare($id)
    {
        // dd($id);
       
        $bantin = db_bantin::find($id);
        // loc ra thuoc tinh
        foreach($bantin->bds->ctthuoctinh as $thuoctinh)
        {
            if($thuoctinh->thuoctinh->ten_thuoctinh == 'Phòng ngủ' )
            {
                $phongngu = $thuoctinh->mo_ta;
            }

            if($thuoctinh->thuoctinh->ten_thuoctinh == 'Phòng tắm' )
            {
                $phongtam = $thuoctinh->mo_ta;
            }

            if($thuoctinh->thuoctinh->ten_thuoctinh == 'Diện tích' )
            {
                $dientich = $thuoctinh->mo_ta;
            }

            if($thuoctinh->thuoctinh->ten_thuoctinh == 'Năm xây dựng' )
            {
                $namxaydung = $thuoctinh->mo_ta;
            }
            if($thuoctinh->thuoctinh->ten_thuoctinh == 'Số tầng' )
            {
                $sotang = $thuoctinh->mo_ta;
            }

        }
       
        // so ssanh neu co bds rui thi khong cho them nua
        $checkout = Cart::content();
        $count = $checkout->count();
        
            if($count > 0)
            {
                foreach($checkout as $cart)
                {
                    $id2 = $cart->id;
                }
                if($id== $cart->id )
                {
                    Toastr::warning('Sản phẩm đã có trong giỏ hàng', 'Thông báo', ["positionClass" => "toast-top-right"]);
                    return redirect()->back();
                }
                elseif($count == 3 )
                {
                    Toastr::warning('Chỉ so sánh được 3 bất động sản', 'Thông báo', ["positionClass" => "toast-top-right"]);
                    return redirect()->back();
                }
                else
                {    
                    Cart::add(['id' => $id,
                    'name' => $bantin->tieu_de,
                    'qty' => 1,
                    'price' => $bantin->gia_tien,
                    'weight' => 1,
                    'options' => ['img' => $bantin->bds->path_hinh,
                                'loaibds' => $bantin->bds->loaibds->ten_loaiBDS,
                                'slug' => $bantin->slug,
                                'tinhthanh' => $bantin->bds->tinh_thanh,
                                'phongngu' => $phongngu,
                                'phongtam' => $phongtam,
                                'sotang' => $sotang,
                                'dientich' => $dientich,
                                'namxaydung' => $namxaydung,
                                'trangthai' => $bantin->hinhthuc->ten_hinhthuc,
                                'tienich' => $bantin->bds->cttaisan
                                ]]);
                    Toastr::info('Đã thêm 1 sản phẩm vào giỏ hàng', 'Thông báo', ["positionClass" => "toast-top-right","progressBar"=> true]);
                   
                }
            }
            elseif($count == 0)
            {
                Cart::add(['id' => $id,
                        'name' => $bantin->tieu_de,
                        'qty' => 1,
                        'price' => $bantin->gia_tien,
                        'weight' => 1,
                        'options' => ['img' => $bantin->bds->path_hinh,
                                    'loaibds' => $bantin->bds->loaibds->ten_loaiBDS,
                                    'slug' => $bantin->slug,
                                    'tinhthanh' => $bantin->bds->tinh_thanh,
                                    'phongngu' => $phongngu,
                                    'phongtam' => $phongtam,
                                    'sotang' => $sotang,
                                    'dientich' => $dientich,
                                    'namxaydung' => $namxaydung,
                                    'trangthai' => $bantin->hinhthuc->ten_hinhthuc,
                                    'tienich' => $bantin->bds->cttaisan


                                    ]]);
                Toastr::info('Đã thêm 1 sản phẩm vào giỏ hàng', 'Thông báo', ["positionClass" => "toast-top-right","progressBar"=> true]);
            }
        

        
        
        if($count < 1)
        {
            return redirect()->back();
        }
        else
        {
            return redirect()->route('compare');

        }
          

    	
    }
    public function delCompare($id)
    {
    	if($id == 'all')
    	{
    		Cart::destroy($id);
            Toastr::warning('Bạn đã xóa hết sản phẩm', 'Thông báo', ["positionClass" => "toast-top-right"]);

    	}
    	else
    	{
    		Cart::remove($id);
            Toastr::warning('Bạn đã xóa 1 sản phẩm', 'Thông báo', ["positionClass" => "toast-top-right"]);

    	}
    	return redirect()->back();
   	}
}
