<?php

namespace App\Http\Controllers;

use App\Models\db_bantin;
use App\Rating;
use Illuminate\Support\collection;

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

}
