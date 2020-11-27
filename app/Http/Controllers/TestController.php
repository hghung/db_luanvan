<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
