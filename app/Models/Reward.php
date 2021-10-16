<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Reward extends Model
{
    use HasFactory;


    public static function get_reward($user_id,$amount,$date,$coin)
    {   
    	$rewards          = new Reward;
        $rewards->user_id = $user_id;
        $rewards->coin    = $coin;
        $rewards->amount  = $amount;
        $rewards->date    = $date;
        $rewards->remarks = "referral reward";
        $rewards->save();
        
    }

    public function user() {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function give_reward($user_id,$amount,$coin,$remarks=null)
    {   
        // store reward log
        $rewards          = new Reward;
        $rewards->user_id = $user_id;
        $rewards->coin    = $coin;
        $rewards->amount  = $amount;
        $rewards->date    = $date;
        $rewards->remarks = $remarks;
        $rewards->save();

        // store reward on wallet
        
    }

    public static function give_rewards_for_referees($user_id,$amount,$coin)
    {
        $user = User::find($user_id);
        $purchased_amount = $amount;

        $rewarding_levels = $this->get_levels($amount);
        if($rewarding_levels > 0)
        {   
            $tmp_user_id = $user->referby;

            // giving rewards based on refer levels 
            for($i=1; $i<=$rewarding_levels; $i++) {

                $tmp_user = User::find($tmp_user_id);
                $reward   = config('app.reward_for_level'.$i);
                $coin     = config('app.reward_coin_for_token_purchase');
                $remarks  = "Reward for sales";

                $this->give_reward($tmp_user->id,$reward,$coin,$remarks)

                $tmp_user_id = $tmp_user->referby;
            }
        }

        return 0;

    }


    public function get_levels($amount)
    {
        $silver_start = config('app.silver_start'); 
        $silver_ends  = config('app.silver_end'); 
        $gold_amount  = config('app.gold_start'); 

        $rewarding_levels = 0;
        
        if($amount >= $silver_start &&  $amount <= $silver_start){
            $rewarding_levels = config('app.silver_reward_levels');
        }
        elseif($amount >= $gold_amount)
        {
            $rewarding_levels = config('app.gold_reward_levels');
        }

        return $rewarding_levels;
    }
}
