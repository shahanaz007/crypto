<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;


    public static function get_reward($user_id,$amount,$date)
    {   
    	$rewards          = new Reward;
        $rewards->user_id = $user_id;
        $rewards->coin    = "USDT";
        $rewards->amount  = $amount;
        $rewards->date    = $date;
        $rewards->remarks = "referral reward";
        $rewards->save();
        
    }
}
