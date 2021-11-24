<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Hexters\CoinPayment\CoinPayment;
use App\Models\{Coupon,CouponCategory,CouponPurchase,Location,Brand};
use Auth;
use Cookie;
use App\Events\CouponPurchasedEvent;

class CouponPurchaseController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth','verified']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $today = Carbon::now();
        $today = $today->toDateString();
        $coupons = Coupon::select('brand_id','category_id','point','Currency_code','expiry_date')->where('used','=',0)
        ->where('status','=',1)
        // ->where('expiry_date','>=',$today)
        ->groupBy('brand_id');
        $region = $request->region;
        if($request->region)
        {  
            $region =  $request->region;
            $coupons = $coupons->where('location_id',$region);
            Cookie::queue('region_id', $region);
            session(['region_id' => $region]);
        }
        $coupons = $coupons->paginate(12);


        $coupons->appends(['region' => $region]);
        // $today = Carbon::now();
        // $today = $today->toDateString();
        // $coupons = Coupon::select('brand_id')->where('used','=',0)
        // ->where('status','=',1)
        // ->where('expiry_date','>=',$today)
        // ->groupBy('brand_id')
        // ->paginate(10);
        // $categories = CouponCategory::where('disabled','=',0)->get();
        $locations = Location::where('active','=',1)->get();
        return view('coupon_purchase.index',compact('coupons','locations','region'));
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
        // return $request;
        $user_id   = Auth::user()->id;
        $coupon_id = $request->coupon_id;
        $brand_id = $request->brand_id;
        // $currency  = $request->currency;
        $quantity  = $request->quantity;
        $coupon_id  = $request->coupon_id;

        $currency = 'USD';
        // $region   = Cookie::get('region_id');
        // $region   = session('region_id');
        $region   = $request->region_id;
        
        $today = Carbon::now();
        $today = $today->toDateString();
        $coupon = Coupon::find($coupon_id);
        if(!$coupon){
            return redirect()->back()->with('error','Something Went Wrong !. Try Again After Sometime.');
        }

       
        
        
        // return $debited;

        // $coupon       = Coupon::find($coupon_id); 
        // $coupon->used = 1;
        // $coupon->save();

        if($request->quantity <= 0){
            return redirect()->back()->with('error','Invalid Quantity');
        }
            // $amount    = $request->amount * $request->quantity;
        $amount    =  $coupon->point * $request->quantity;   
         

        $from      = $coupon->Currency_code;
        $to        = 'USD';
        $amount    = $coupon->convert($from,$to, $amount);

        // adding service charge
        $amount_with_service_charge = $coupon->with_service_charge($amount,$coupon->service_charge) ; 

        $single_coupon_amount = $coupon->convert($from,$to, $coupon->point);
        // with service charge
        $single_coupon_amount_w_s =$coupon->with_service_charge($single_coupon_amount,$coupon->service_charge) ;

        $wallet_amount = Auth::user()->usd_balance();
        
        if($amount_with_service_charge > $wallet_amount){
            return redirect()->back()->with('error','Insufficient Balance on Wallet');
        }
        
        $debited = Auth::user()->debit_user($currency, $amount_with_service_charge);


        if($debited['code'] != 200)
        {   return $debited;
            return redirect()->back()->with($debited['status'],$debited['message']);
        }

        $details = "";
        for($i = 0; $i<$quantity; $i++)
        {

        
            //amount ends
        // $tmp_coupon = Coupon::find($coupon->id); 
        // $coupon->used = 1;
        // $coupon->save();


        $details              = new CouponPurchase;
        $details->user_id     = $user_id;
        $details->coupon_id   = $coupon->id;
        $details->currency    = $currency;
        $details->amount      = $single_coupon_amount;
        $details->paid_amount = $single_coupon_amount_w_s;
        $details->brand_name  = $request->brand_name;
        $details->coupon_value= $single_coupon_amount.' '.$currency;
        $details->region_name = $request->region;
        $details->status      = 0;
        $details->save();

        }
        //event Coupon Purchased
        event(new CouponPurchasedEvent($details,$quantity));
        
        return redirect('coupon_purchase')->with('status','Coupon purchased successfully. It will be sent to your email shortly !');

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

        $coupons = Coupon::select('point','currency_code','location_id','id','brand_id','category_id','remarks','expiry_date','name','validity')->where('used','=',0)
        ->where('status','=',1)
        // ->where('expiry_date','>=',$today)
        ->where('brand_id',$brand_id)
        ->where('location_id',$region)
        // ->groupBy('point')
        ->orderBy('point')->get();
        
        $details = Coupon::where('status','=',1)
        // ->where('expiry_date','>=',$today)
        ->where('brand_id',$brand_id)
        ->where('location_id',$region)
        ->first();

        if(count($coupons) <=0)
        {   

            $coupons = Coupon::select('point','currency_code','location_id','id','brand_id','category_id','remarks','expiry_date','name','validity')->where('used','=',0)
            ->where('status','=',1)
            // ->where('expiry_date','>=',$today)
            ->where('brand_id',$brand_id)
            // ->where('location_id',$region)
            // ->groupBy('point')
            ->orderBy('point')->get();
            
            if(count($coupons) > 0)
            {
            $region =$coupons[0]->location_id;

            $details = Coupon::where('status','=',1)
            // ->where('expiry_date','>=',$today)
            ->where('brand_id',$brand_id)
            ->where('location_id',$region)
            ->first();
            }
            // return redirect()->back()->with('status','Please Select Region');
        }
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
