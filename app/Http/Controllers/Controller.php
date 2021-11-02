<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Cookie;
use App\Models\{Coupon};

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
    	
    	if (Cookie::get('region_id') == null){
    		$region = Coupon::select('location_id')->where('used','=',0)->first();
    		Cookie::queue('region_id', $region);
    	}
    }
}
