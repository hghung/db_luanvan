<?php

namespace App\Http\Controllers;

use App\Models\db_bantin;
use App\Models\db_datlich;
use App\Rating;
use Illuminate\Support\collection;
//
Use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use Response;
use App\Event;
/////
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TestController extends Controller
{
    public function test1()
    {
        return view('test.test');
    } 

    public function test2()
    {
        return view('test.test2');
        
    }

    public function test3()
    {
        return view('test.test3');
    }

    public function test4()
    {
        return view('test.test4');
    }

    public function test5($id)
    {   
        $post['post'] = db_bantin::find($id);
        return view('test.test5',$post);
    }

    public function test6()
    {   
        $post['posts'] = db_bantin::all();
        return view('test.test6',$post);
    }

    public function postPost(Request $request)
    {
        request()->validate(['rate' => 'required']);
        $post = db_bantin::find($request->id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $post->ratings()->save($rating);
        
        return redirect()->route("posts");
    }

    public function test7()
    {   
        $rating = Rating::sum('rating');
        if($rating == 0)
        {
            $total = 0;
        }
        elseif($rating != 0)
        {
            $rating2 = Rating::count();
            $total = $rating / $rating2;
        }
        
        return view('test.test7',compact('total'));
    }

    public function post_test7(Request $rq)
    {   
        $test = new Rating;
        $test->rating = $rq->rating;
        $test->save();
        return Redirect()->back();
        
    }
    ////////////////////////////////////////////////////////////////////////////
    public function test9(Request $rq)
    {
        if(request()->ajax()) 
        {        
            $start =  Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $data = db_datlich::where('id_nguoidang','=',Auth::user()->id)
                                ->where('id_trangthai','=',2)
                                ->whereDate('start', '>=', $start)
                                ->get(['id','title','start']);

                                //wheredate so sanh ngay lon hoac = ngay hien tai
            return Response::json($data);
        }
        return view('test.test9');

    }

    public function test8(Request $rq)
    {
        if(request()->ajax()) 
        {        
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

            $data = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
            return Response::json($data);
        }
        return view('test.test8');

    }
    public function create(Request $request)
    {  
        
        $insertArr = [ 'title' => $request->title,
                       'start' => $request->start,
                       'end' => $request->end
                    ];

        $event = Event::insert($insertArr);   
        return Response::json($event);
    }
     
 
    public function update(Request $request)
    {   
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);
 
        return Response::json($event);
    } 
 
 
    public function destroy(Request $request)
    {
        $event = Event::where('id',$request->id)->delete();
   
        return Response::json($event);
    }    
    //////////////////////////////////////////////////////////


}
