<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\db_bantin;
use App\Models\db_datlich;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
Use Carbon\Carbon;
class ChartCus extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
       $datlich = db_datlich::where('id_nguoidang','=',Auth::user()->id)->get();
        $xuly = db_datlich::where('id_trangthai','=',1)->get();
        $thanhcong = db_datlich::where('id_trangthai','=',2)->get();
        $huy = db_datlich::where('id_trangthai','=',3)->get();


        
        $array1 = array();

        foreach($xuly as $xuly2)
        {
            //    
        }
        foreach($thanhcong as $thanhcong2)
        {
            //
        }

        foreach($huy as $huy2)
        {
            //
        }

        foreach($datlich as $as)
        {
            $tieude= date('d-m-Y',strtotime($as->ngay_tao)) ;
            $array1[] = $tieude ;
            
        }
        return Chartisan::build()
            ->labels($array1)
            ->dataset('Xử lý', $array2)
            ->dataset('Thành công', $array3)
            ->dataset('Hủy', $array4);


    }
}