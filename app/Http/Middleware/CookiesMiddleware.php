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
                session(['region_id' => $region->id]);
              }else if(session('region_id')  == null )
              {
                $region = Cookie::get('region_id');
                session(['region_id' => $region]);
              }

              if (Cookie::get('currency') == null){
                Cookie::queue('currency', 'USD');
                session(['currency' => 'USD']);
                // return "ok";
              }else if(session('currency')  == null )
              {
                $currency = Cookie::get('currency');
                session(['currency' => $currency]);
              }

// $value = session('key');
// session('key', 'default');
              // session(['key' => 'value']);
             
                return $next($request);
              
    }
}
