<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tokens_usdt_wallet extends Model
{
    use HasFactory;

    public static function credit($user_id,$amount,$coin,$remarks = null)
    {   
    	$wallet           = new tokens_usdt_wallet;
        $wallet->user_id  = $user_id;
        $wallet->coin     = $coin;
        $wallet->credit   = $amount;
        $wallet->remarks  = $remarks;
        $wallet->save();

    }
    
    public static function debit($user_id,$amount,$coin,$remarks = null)
    {   
    	$wallet           = new tokens_usdt_wallet;
        $wallet->user_id  = $user_id;
        $wallet->coin     = $coin;
        $wallet->debit    = $amount;
        $wallet->remarks  = $remarks;
        $wallet->save();
        
    }
}
