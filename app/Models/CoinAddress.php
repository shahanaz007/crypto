<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoinAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'currency_code',
        'address'
        ];

    public function user() {
        return $this->hasOne(User::class, 'user_id');
    }
}
