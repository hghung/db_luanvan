<?php

namespace App\Http\Controllers;

use App\Models\db_phuongthucthanhtoan;
use App\Models\db_sanpham;
use Illuminate\Http\Request;
use Toastr;
Use Illuminate\Support\Facades\Auth;



class CuahangController extends Controller
{
    public function list()
    {
        $store['cuahang'] = db_sanpham::where('id_trangthai','=',1)->get();
        return view('luanvan.cua-hang.list',$store);
    }

    public function checkout(db_sanpham $slug)
    {
        $checkout['checkout'] = db_sanpham::find($slug->id);
        $checkout['phuongthuc'] = db_phuongthucthanhtoan::all();
        return view('luanvan.cua-hang.checkout',$checkout);
    }
    

    public function voucher()
    {   
        $videoCourse = db_sanpham::find(2);
        $voucher = $videoCourse->createVoucher(['discount_percent' => 10],today()->addDays(7));
        dd($voucher);
        die;
    }

    public function checkout3(Request $request, db_sanpham $slug)
    {
        $product = db_sanpham::findOrFail($slug->id); 
        $phuongthuc = db_phuongthucthanhtoan::all();
        
        $total_price = $product->sanpham_gia; 
        $voucher = false; 
        if($request->voucher) { 
            try { 
                $voucher = Auth::user()->redeemCode($request->voucher); 
                $total_price = round( $total_price * (1 - $voucher->data->get('discount_percent') / 100), 2);
            } catch (\Exception $ex) { 
                    session()->flash('error', $ex->getMessage()); 
            } 
        }
        return view('luanvan.cua-hang.checkout',compact('product', 'phuongthuc', 'total_price', 'voucher'));
    }
    public function bill()
    {
        return view('luanvan.cua-hang.checkout');

    }

    // Ngân hàng: NCB
    // Số thẻ: 9704198526191432198
    // Tên chủ thẻ:NGUYEN VAN A
    // Ngày phát hành:07/15
    // Mật khẩu OTP:123456
    public function thanhtoan(Request $request)
    {   
            session(['cost_id' => $request->id]);
            session(['url_prev' => url()->previous()]);
            $vnp_TmnCode = "VVULVOU2"; //Mã website tại VNPAY 
            $vnp_HashSecret = "SBKILOMMRSKUSLHMVFYFATIDBLYKYDAU"; //Chuỗi bí mật
            $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
            $vnp_Returnurl = route('home1');
            $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
            $vnp_OrderType = 'billpayment';
            $vnp_Amount = $request->input('amount');
            $vnp_Locale = 'vn';
            $vnp_IpAddr = request()->ip();

            $inputData = array(
                "vnp_Version" => "2.0.0",
                "vnp_TmnCode" => $vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => $vnp_OrderInfo,
                "vnp_OrderType" => $vnp_OrderType,
                "vnp_ReturnUrl" => $vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
            );

            if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }
            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . $key . "=" . $value;
                } else {
                    $hashdata .= $key . "=" . $value;
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $vnp_Url . "?" . $query;
            if (isset($vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
                $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
                $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
            }

            return redirect($vnp_Url);
            die;
            // dd($hopdong);
            // ra được hợp đồng thì sẽ hủy giỏ hàng đang lưu
            Cart::destroy();
            // update lại trang bạn tin thành 2 từ chưa thuê thành đã thue
            $data = bangtin::where('id',$checkout->id)->update(['trang_thai'=>2]);
            Toastr::success('Hơp đồng thành công', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->route('detail.contract',['id' => $hopdong->id]);
        
        
    }

    public function history()
    {
        return view('luanvan.cua-hang.lich-su');
    }
}
