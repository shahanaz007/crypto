<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use AmrShawky\LaravelCurrency\Facade\Currency;

class Coupon extends Model
{
    use HasFactory;

    public function coupon_category() {
        return $this->belongsTo('App\Models\CouponCategory','category_id');
    }

    public function location() {
        return $this->belongsTo('App\Models\Location','location_id');
    }
    
    public function brand() {
        return $this->belongsTo('App\Models\Brand','brand_id');
    }

    public function coupon_purchase()
    {
        return $this->hasMany('App\Models\CouponPurchase');
    }

    public function convert($from,$to, $amount)
    {
        $response = Currency::convert()
        ->from($from)
        ->to($to)
        ->amount($amount)
        ->round(2)
        ->get();

         
         return $response;
    }

}
