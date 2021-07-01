<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Hexters\CoinPayment\Entities\CoinpaymentTransaction;

use Auth;
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function withdraw($tokens)
    {
       $usr= User::find(Auth::user()->id);
       $new_tokens = $usr->available_tokens - $tokens;
        $usr->available_tokens = $new_tokens;
        $usr->save();
        return 200;
    }

    public function withdrawal()
    {
        return $this->hasMany('App\Models\withdrawal');
    }
    
    public function coinaddresses()
    {
        return $this->hasMany(CoinAddress::class, 'user_id', 'id');
    }

    public function balance($user_id,$currency){

        $credit = CoinpaymentTransaction::where('currency_code',$currency)->where('user_id',$user_id)->where('status',100)->get()->sum('receivedf');
        $debit = Withdrawal::where('currency_code',$currency)->where('user_id',$user_id)->where('status',100)->get()->sum('amount');
        $balance = $credit - $debit;

        return $balance;
    }

    // for debit from wallet 
    public function debit(Request $request){

        $balance = $this->balance($this->id,$request->currency);
        $requested_amount = $request->amount;

        if($balance >= $requested_amount )
        {
            try
            {
                $wd =new Withdrawal;
                $wd->user_id = $this->id;
                $wd->w_id = uniqid();
                $wd->amount = $request->amount;
                $wd->currency_code = $request->currency;
                $wd->address = $request->address;
                $wd->status = 100;
                if($wd->save())
                {   
                    
                    return "withdrawed Amount. New balance=".$this->balance($this->id,$request->currency);
                }
            }
            catch(\Exception $e)
            {
                return  $e;
            }
            

            
        }
        else
        {
            return "No more balance. available_bal =".$balance;
        }
        

    }

    public function merchant()
    {
        return $this->hasMany('App\Models\MerchantRequest');
    }
}
