<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hexters\CoinPayment\Entities\CoinpaymentTransaction;
use App\Models\{Withdrawal,Tokenpurchase,User,Reward,tokens_usdt_wallet};
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {      $admin = 'admin?';
        if(Auth::user()->$admin == 1 )
        {
            return redirect('/withdraw_request/index');
        }
        $user_id = Auth::user()->id;
        $refercode = Auth::user()->myrefercode;

        $btc = CoinpaymentTransaction::where('currency_code','BTC')->where('user_id',$user_id)->where('status',100)->get()->sum('receivedf');
        $w_btc = Withdrawal::where('currency_code','BTC')->where('user_id',$user_id)->where('status',100)->get()->sum('amount');
        $btc = $btc - $w_btc;

        $trx = CoinpaymentTransaction::where('currency_code','TRX')->where('user_id',$user_id)->where('status',100)->get()->sum('receivedf');
        $w_trx = Withdrawal::where('currency_code','TRX')->where('user_id',$user_id)->where('status',100)->get()->sum('amount');
        $trx = $trx - $w_trx;

        $usdt = CoinpaymentTransaction::where('currency_code','USDT.BEP2')->where('user_id',$user_id)->where('status',100)->get()->sum('receivedf');
        $w_usdt = Withdrawal::where('currency_code','USDT.BEP2')->where('user_id',$user_id)->where('status',100)->get()->sum('amount');
        $usdt = $usdt - $w_usdt; 

        $eth = CoinpaymentTransaction::where('currency_code','ETH')->where('user_id',$user_id)->where('status',100)->get()->sum('receivedf');
        $w_eth = Withdrawal::where('currency_code','ETH')->where('user_id',$user_id)->where('status',100)->get()->sum('amount');
        $eth = $eth - $w_eth;

        $ltct = CoinpaymentTransaction::where('currency_code','LTCT')->where('user_id',$user_id)->where('status',100)->get()->sum('receivedf');
        $w_ltct = Withdrawal::where('currency_code','LTCT')->where('user_id',$user_id)->where('status',100)->get()->sum('amount');
        $ltct = $ltct - $w_ltct;

        $pendings = CoinpaymentTransaction::where('status',0)->where('txn_id','!=','')->where('user_id',$user_id)->orderBy('id','DESC')->paginate(5);

        return view('home',compact('btc','eth','usdt','trx','ltct','pendings','refercode'));
    }


    public function get_sum($object)
    {
        foreach ($object as $obj) {
            // $sum = $sum + $obj->
        }
    }


        public function user_home()
    {   
     try{
        $user_id = Auth::user()->id;
        $legs = User::where('referby',$user_id)->get();
        $datas = [];

        foreach($legs as $leg)
        {
            $name = $leg->name;
            $business_volume = Tokenpurchase::get_total_sales_of_user($leg->id);
            $eligible_sales_volume = Tokenpurchase::get_eligible_sales_volume($business_volume);
            $datas[] = [
                'name'=>$name,
                'business_volume' => $business_volume,
                'eligible_sales_volume' => $eligible_sales_volume,
            ];

        }

        // $bal = Auth::user()->usd_balance();
        
        return view('user_home',compact('datas'));
        // return $datas;

    }catch(Exception $exception)
    {
        return $exception->getMessage();
    }

    }
}
