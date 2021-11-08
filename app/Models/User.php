<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Hexters\CoinPayment\Entities\CoinpaymentTransaction;

use Auth;
class User extends Authenticatable implements MustVerifyEmail
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
        'myrefercode',
        'referby',
        'level'
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
    
    public function token_withdrawal()
    {
        return $this->hasMany('App\Models\TokenWithdrawal');
    }

    public function coinaddresses()
    {
        return $this->hasMany(CoinAddress::class, 'user_id', 'id');
    }

    public function balance($currency,$user_id = NULL){
        if(!$user_id)
        {
            $user_id = $this->id;
        }
        
        $credit = CoinpaymentTransaction::where('user_id',$user_id)->where('status',100)->get()->sum('received_usd');
        $debit = Withdrawal::where('currency_code',"USD")->where('user_id',$user_id)->where('status',100)->get()->sum('amount');
        $balance = $credit - $debit;

        return $balance;
    }

    // for debit from wallet 
    public function debit(Request $request){

        $balance = $this->balance($request->currency);
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
                    
                    return "withdrawed Amount. New balance=".$balance;
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


        // for debit from wallet 
    public function debit_user($currency, $amount){

        $balance = $this->balance($currency);
        $requested_amount = $amount;

        if($balance >= $requested_amount )
        {
            try
            {
                $wd =new Withdrawal;
                $wd->user_id = $this->id;
                $wd->w_id = uniqid();
                $wd->amount = $amount;
                $wd->currency_code = $currency;
                // $wd->address = $request->address;
                $wd->status = 100;
                if($wd->save())
                {  

                    $result['status'] = 'success';
                    $result['message'] = "withdrawed Amount. New balance=".$balance; 
                    $result['code'] = 200;
                    return $result;
                }
            }
            catch(\Exception $e)
            {
                $result['status'] = 'error';
                $result['message'] = $e;
                $result['code'] = 500;
                return  $result;
            }
            
        }
        else
        {   
            $result['status'] = 'error';
            $result['message'] = "No more balance. available_bal =".$balance;
            $result['code'] = 406;
            return $result;
        }
        

    }

    public function merchant()
    {
        return $this->hasMany('App\Models\MerchantRequest');
    }

    public function kyc()
    {
        return $this->hasMany('App\Models\kyc');
    }

    public function token_purchase()
    {
        return $this->hasMany('App\Models\Tokenpurchase');
    }

    public function reward()
    {
        return $this->hasMany('App\Models\Reward');
    }

    public function referral()
    {
        return $this->hasMany('App\Models\Referral');
    }


    public function usd_balance()
    {   
     try
     {
        $recieved_usd = CoinpaymentTransaction::where('user_id',$this->id)->where('status',100)->get()->sum('received_usd');
        $w_usd = Withdrawal::where('currency_code','USD')->where('user_id',$this->id)->where('status',100)->get()->sum('amount');
        $usd = $recieved_usd - $w_usd;
        $usd = round($usd, 2);
        return $usd;
      }
      catch(Exception $e)
      {
        return $e->getMessage();
      }  
    }

    public function stake()
    {
        $user_id = Auth::user()->id;
        $tokens  = StakeTokens::where('user_id',$user_id)->where('status',1)->get()->sum('no_of_tokens');
        return $tokens;
    }

    public function token_balance()
    {
        $user_id  = Auth::user()->id;
        $purchase = Tokenpurchase::where('user_id',$user_id)->get()->sum('no_of_tockens');
        $withdraw = TokenWithdrawal::where('user_id',$user_id)->where('status',100)->get()->sum('amount');
        $balance  = $purchase - $withdraw;
        return $balance;

    }



    public function users_list()
    {
        $user_id  = Auth::user()->id;
        $total_users = User::where('referby',$user_id)->get();
        
        // $total_users = User::where('created_at','dummy')->get();
        // $total_users->push($users);
        $users = $total_users;

        do
        {   
            $new_users = User::where('created_at','dummy')->get();
            if(count($users) > 0)
            {
                foreach ($users as $user) {

                    $tmp_users = User::where('referby',$user->id)->get();
                    if(count($tmp_users) > 0)
                    {
                        $total_users->push($tmp_users);

                        foreach ($tmp_users as $tmp_user) 
                        {

                            $tmp = User::where('referby',$tmp_user->id)->get();
                            if(count($tmp) > 0)
                            {
                               $new_users->push($tmp); 
                               $total_users->push($tmp);
                            }
                                
                        }
                    }
                    


                }
            }
            
            $users = $new_users; 

        }while(count($users) > 0);


        return $total_users;
        }

    public function usdt_balance()
    {
        $user_id = Auth::user()->id;
        $credit  = tokens_usdt_wallet::where('user_id',$user_id)->where('coin','usdt')->get()->sum('credit');
        $debit   = tokens_usdt_wallet::where('user_id',$user_id)->where('coin','usdt')->get()->sum('debit');
        $balance = $credit - $debit;
        return $balance;
    }

    public function coupon_purchase()
    {
        return $this->hasMany('App\Models\CouponPurchase');
    }
}
