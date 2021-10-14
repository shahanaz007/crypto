<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Referral extends Model
{
    use HasFactory,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'referrer_user_id',
        'referee_user_id',
        
    ];

    public function user_referrer() {
        return $this->belongsTo('App\Models\User','referrer_user_id');
    }

    public function user_referee() {
        return $this->belongsTo('App\Models\User','referee_user_id');
    }
}
