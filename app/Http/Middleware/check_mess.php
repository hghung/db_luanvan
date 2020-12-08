<?php

namespace App\Http\Middleware;

use Closure;
Use Illuminate\Support\Facades\Auth;// phải khai bảo mới hiểu được thư viên Auth
use Toastr;
class check_mess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if(Auth::user()->name && Auth::user()->avatar)
            return $next($request);
        else
            Toastr::warning('Chưa cập nhật profile', 'Thông báo', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
    }
}
