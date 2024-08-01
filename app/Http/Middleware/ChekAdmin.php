<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ChekAdmin
{
   
    public function handle($request, Closure $next)
    {
        if(Auth::user() && Auth::user()->role =="admin"){
       
            return $next($request);
    
    }elseif (Auth::user() && Auth::user()->role =="user"){
       
        return redirect()->route('welcomepage');
    
    }else{
        return redirect()->route('login');
    }
}
}