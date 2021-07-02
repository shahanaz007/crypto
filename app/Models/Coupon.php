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
}
