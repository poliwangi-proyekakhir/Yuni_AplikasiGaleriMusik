<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Usermiddleware
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
        if(Auth::check())
        {
            if(Auth::user()->role_as == 0)
            {
                return $next($request);
            }
            else
            {
                return redirect('/home')->with('status','Access Denied! as you are not logged in');
            }
        }
        else
        {
            return redirect('/home')->with('status','Please Login First');
        }
    }
}
