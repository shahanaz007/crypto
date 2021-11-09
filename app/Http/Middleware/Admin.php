<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $admin = 'admin?';
        if(Auth::check())
        {
        if(Auth::user()->$admin == 0 ){
            
            abort(403);
        }
       
        return $next($request);
    }
     return redirect('/login');
    }
}
