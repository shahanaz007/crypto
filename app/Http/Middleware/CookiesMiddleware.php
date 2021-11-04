<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Cookie;
use App\Models\Location;

class CookiesMiddleware
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

        if (Cookie::get('region_id') == null){
                $region = Location::first();
                Cookie::queue('region_id', $region->id);
              }

              if (Cookie::get('currency') == null){
                Cookie::queue('currency', 'USD');
              }


             
                return $next($request);
              
    }
}
