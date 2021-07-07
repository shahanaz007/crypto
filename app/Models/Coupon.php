<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
