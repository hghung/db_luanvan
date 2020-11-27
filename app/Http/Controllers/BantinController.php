<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use QrCode;
use Illuminate\Support\Facades\Storage;
use App\Models\db_bantin;
use App\Models\db_batdongsan;
use App\Models\db_ct_taisan;
use App\Models\db_ct_thuoctinh;
use App\Models\db_hinhanh;
use App\Models\db_loaiBDS;
use App\Models\db_taisan;
use App\Models\db_thuoctinh;
use App\Models\Province;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BantinController extends Controller
{   
    public function list()
    {

        $index['bantin'] = db_bantin::where('id_thanhvien','=',Auth::user()->id)->get();
        return view('luanvan.ban-tin.list',$index);
    }   



    public function add()
    {
        $add['loaiBDS'] = db_loaiBDS::all();
        $add['thuoctinh'] = db_thuoctinh::all();
        $add['taisan'] = db_taisan::all();
        $add['khuvuc'] = Province::all();

        return view ('luanvan.ban-tin.add',$add);
    }

    public function checkSlug(Request $rq)
    {
       $slug = SlugService::createSlug(db_bantin::class, 'slug', $rq->title);
       return response()->json(['slug' => $slug]);
    }


    public function add_post(Request $rq)
    {
         // $lat2 = $rq->lat;
        // $count_lat = strlen($lat2);
        // // 
        // if($count_lat > 10)
        // {
        //     $lat = substr($lat2, 0, -8);
        //     // echo "2";
        // }
        // elseif($count_lat < 10)
        // {
        //     $lat = $lat2;

        // }
        // $lng2 = $rq->lng;
        // $count_ln = strlen($lng2);
        // if($count_ln > 10)
        // {
        //     $lng = substr($lng2, 0, -8);

        // }
        // elseif($count_ln < 10)
        // {
        //     $lng = $lng2;
        // }
        
        $money= str_replace(array('.',','), array('',''), $rq->giatien);
        
        // 
        $bantin = new db_bantin;
        $bantin->tieu_de	    = $rq->title;
        $bantin->slug	        = $rq->slug;
        $bantin->mo_ta	        = $rq->mota;
        $bantin->id_hinhthuc 	= $rq->hinhthuc;
        $bantin->gia_tien 	    = $money;
        $bantin->id_trangthai 	= 3;
        $bantin->id_loaibantin 	= 1;
        $bantin->views 	        = 0;
        $bantin->id_thanhvien   = Auth::user()->id;
        $bantin->save();
        $bantin->ma_bantin	    = "NEWS-000".$bantin->id;
        $bantin->save();
        if($bantin->save())
        {
            $batdongsan                 = new db_batdongsan;
            $batdongsan->dia_chi           = $rq->diachi;
            $batdongsan->tinh_thanh           = $rq->tinhthanh;
            $batdongsan->vido           = $rq->lat;
            $batdongsan->kinhdo         = $rq->lng ;
            $batdongsan->id_loaiBDS   = $rq->loaiBDS;
            $batdongsan->id_bantin      = $bantin->id;

            // xu ly qrcode start
            $qr2 =  QrCode::format('png')->size(90)->geo($rq->lat,$rq->lng);
            $output_file = '/qr-code/img-' . $rq->slug . '.png';
            $abc = Storage::disk('local')->put($output_file, $qr2);
            
            $batdongsan->qrcode      = '/storage/app'.$output_file;
            //end
           
            if($rq->hasFile('path_hinh'))
            {
                $file = $rq->file('path_hinh');
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
                while(file_exists('public/upload/bat-dong-san/'.$hinh_anh))
                {
                    $hinh_anh = str_random(4)."_".$name;
                }
                // echo $name; die; 
                $file->move('public/upload/bat-dong-san/',$hinh_anh);
                $batdongsan->path_hinh = '/public/upload/bat-dong-san/'.$hinh_anh;
            
            }
            $batdongsan->save();
        }

        if($batdongsan->save())
        {
            $array_thuoctinh = array();
            foreach($rq->thuoctinh as $key => $value ) {
                if($rq->mota_thuoctinh[$key] == null)
                {
                    // neu mo_ta == null
                }
                else
                {
                    $array_thuoctinh [] =  [
                        'idthuoctinh'   => $rq->thuoctinh[$key],
                        'mota'          => $rq->mota_thuoctinh[$key],
                        'id_batdongsan' => $batdongsan->id,
                    ];
                }

            }

            foreach($array_thuoctinh as $key => $value)
            {
                $ct_thuoctinh = new db_ct_thuoctinh;
                $ct_thuoctinh->id_batdongsan = $value['id_batdongsan'];
                $ct_thuoctinh->id_thuoctinh      = $value['idthuoctinh'];
                $ct_thuoctinh->mo_ta      = $value['mota'];
                $ct_thuoctinh->save();
            }
            
            // tai-san
            $array_taisan = array();
            foreach($rq->taisan as $key => $value ) {
                $array_taisan [] =  [
                    'id_taisan' => $rq->taisan[$key],
                    'id_soluong' => $rq->soluong[$key],
                    'id_batdongsan' => $batdongsan->id,
                ];
            }

            foreach($array_taisan as $key => $value)
            {
                $ct_taisan = new db_ct_taisan;
                $ct_taisan->id_batdongsan = $value['id_batdongsan'];
                $ct_taisan->id_taisan = $value['id_taisan'];
                $ct_taisan->so_luong = $value['id_soluong'];
                $ct_taisan->save();
            }

            // mutiple hinhanh
            $image = $rq->file('file');
            // dd($image);
            foreach($image as $key)
            {   
                $hinhanh = new db_hinhanh;
                $name = str_random(5)."_".$key->getClientOriginalName(); // lấy ra tên
                $location = 'public/upload/bat-dong-san/'; // vị tri lưu
                $key->move(public_path('/upload/bat-dong-san'), $name);// chuyên đên thư muc
                $hinhanh->path = $location.$name;
                $hinhanh->id_batdongsan = $batdongsan->id ;
                $hinhanh->save();

            }
            

        }

        return redirect()->route('home1');

    }


}
