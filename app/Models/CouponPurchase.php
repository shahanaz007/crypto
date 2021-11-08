<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponPurchase extends Model
{
    use HasFactory;

    public function coupon() {
        return $this->belongsTo('App\Models\Coupon','coupon_id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
