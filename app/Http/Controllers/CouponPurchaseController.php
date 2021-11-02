<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Hexters\CoinPayment\CoinPayment;
use App\Models\{Coupon,CouponCategory,CouponPurchase,Location};
use Auth;
use Cookie;

class CouponPurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $today = Carbon::now();
        $today = $today->toDateString();
        $coupons = Coupon::select('brand_id')->where('used','=',0)
        ->where('status','=',1)
        ->where('expiry_date','>=',$today)
        ->groupBy('brand_id');

        if($request->region)
        {  
            $region =  $request->region;
            $coupons = $coupons->where('location_id',$region);
            Cookie::queue('region_id', $region);
        }
        $coupons = $coupons->paginate(10);



        // $today = Carbon::now();
        // $today = $today->toDateString();
        // $coupons = Coupon::select('brand_id')->where('used','=',0)
        // ->where('status','=',1)
        // ->where('expiry_date','>=',$today)
        // ->groupBy('brand_id')
        // ->paginate(10);
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
        $brand_id = $request->brand_id;
        // $currency  = $request->currency;
        $quantity  = $request->quantity;


        $currency = 'USD';
        $region   = Cookie::get('region_id');

        // return $request->amount;

        // checks coupon stock
        $today = Carbon::now();
        $today = $today->toDateString();
        $coupons = Coupon::select('id','currency_code','point')->where('used','=',0)
        ->where('status','=',1)
        ->where('expiry_date','>=',$today)
        ->where('brand_id',$brand_id)
        ->where('location_id',$region)
        ->where('point',$request->amount)        
        ->get()->take($quantity);

        if(count($coupons) < $quantity){
            return redirect()->back()->with('error','Requested Quanity is greater than available quantity');
        }


        
        
        // return $debited;

        // $coupon       = Coupon::find($coupon_id); 
        // $coupon->used = 1;
        // $coupon->save();

        foreach($coupons as $coupon)
        {

            // $amount    = $request->amount * $request->quantity;
        $amount    =  $coupon->point;   
       

        $from      = $coupon->currency_code;
        $to        = 'USD';
        $amount    = $coupon->convert($from,$to, $amount);

        $wallet_amount = Auth::user()->usd_balance();
        
        if($amount > $wallet_amount){
            return redirect()->back()->with('error','Insufficient Balance on Wallet');
        }
        
        $debited = Auth::user()->debit_user($currency, $amount);


        if($debited['code'] != 200)
        {   return $debited;
            return redirect()->back()->with($debited['status'],$debited['message']);
        }


            //amount ends
        $tmp_coupon = Coupon::find($coupon->id); 
        $coupon->used = 1;
        $coupon->save();


        $details              = new CouponPurchase;
        $details->user_id     = $user_id;
        $details->coupon_id   = $coupon->id;
        $details->currency    = $currency;
        $details->amount      = $amount;
        $details->paid_amount = $amount;
        $details->status      = 1;
        $details->save();



        }
        return redirect('coupon_purchase')->with('status','Coupon Purchased Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($brand_id)
    {
        
       
        $today = Carbon::now();
        $today = $today->toDateString();
        $region   = Cookie::get('region_id');

        $coupons = Coupon::select('point','currency_code')->where('used','=',0)
        ->where('status','=',1)
        ->where('expiry_date','>=',$today)
        ->where('brand_id',$brand_id)
        ->where('location_id',$region)
        ->groupBy('point')
        ->get();
        
        $details = Coupon::where('status','=',1)
        ->where('expiry_date','>=',$today)
        ->where('brand_id',$brand_id)
        ->where('location_id',$region)
        ->first();

        return view('coupon_purchase.purchase',compact('details','coupons'));
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
