<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Hexters\CoinPayment\CoinPayment;
use App\Models\{Coupon,CouponCategory,CouponPurchase,Location};
use Auth;

class CouponPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($reg_id=null)
    {

        $today = Carbon::now();
        $today = $today->toDateString();
        $coupons = Coupon::where('used','=',0)
        ->where('status','=',1)
        ->where('expiry_date','>=',$today)->paginate(10);
        // $categories = CouponCategory::where('disabled','=',0)->get();
        $locations = Location::where('active','=',1)->get();
        return view('coupon_purchase.index',compact('coupons','locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user_id   = Auth::user()->id;
        $coupon_id = $request->coupon_id;
        $currency  = $request->currency;
        $amount    = $request->amount;

        // starts
        $coins = CoinPayment::getRates();
        $usd_rate = $coins['result']['USD']['rate_btc'];
        $currency_rate = $coins['result'][$currency]['rate_btc'];
        $btc_amount = $amount * $usd_rate;

        $converted_amount = $btc_amount /  $currency_rate;
        $converted_amount = round($converted_amount,8);
        
        if(Auth::user()->balance($currency) < $converted_amount){
            return redirect()->back()->with('error','Insufficient Balance on Wallet');
        }

        $debited = Auth::user()->debit_user($currency, $converted_amount);
        if($debited['code'] != 200)
        {
            return redirect()->back()->with($debited['status'],$debited['message']);
        }
        
        // return $debited;

        // $coupon       = Coupon::find($coupon_id); 
        // $coupon->used = 1;
        // $coupon->save();


        $details              = new CouponPurchase;
        $details->user_id     = $user_id;
        $details->coupon_id   = $coupon_id;
        $details->currency    = $currency;
        $details->amount      = $amount;
        $details->paid_amount = 0;
        $details->status      = 1;
        $details->save();

        return redirect('coupon_purchase')->with('status','Coupon Purchased Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = Coupon::find($id);
        // return $details;
        return view('coupon_purchase.purchase',compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function select_currency(Request $request)
    {
        $coins = CoinPayment::getRates();
        $rates = [];
        $amount =  $request->amount;
         $usd_rate = $coins['result']['USD']['rate_btc'];
         $all_coin_rates = $coins['result'];


         foreach($all_coin_rates as $key => $rate)
         {
            if($rate['accepted'] == 1)
            {   
                $coin = $key;
                $btc_rate = $rate['rate_btc'];

                
                $currency_rate = $btc_rate;

                $btc_amount = $amount * $usd_rate;
                $converted_amount = $btc_amount /  $currency_rate;

                $rates[] = 
                [
                    'coin' => $coin,
                    'rate' => $converted_amount,
                    'btc_rate' => $btc_rate
                ];
            }
         }

         return view('coupon_purchase.select_currency',compact('rates'));
    }
}
