<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    public function index()
    {
        return view('luanvan.thong-ke.index');
    }
}
