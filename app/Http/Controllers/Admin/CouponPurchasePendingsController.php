<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{CouponPurchase};

class CouponPurchasePendingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $coupons = CouponPurchase::where('status',0);

        if($request->from_date){
            $from_date =  $request->from_date.' 00:00:00';
        
            $coupons = $coupons->where('created_at','>=',$from_date);
        }
        
        if($request->to_date){
            $to_date   =  $request->to_date.' 23:59:59';
        
            $coupons = $coupons->where('created_at','<=',$to_date);
        }
        $coupons = $coupons->paginate(10);
       return view('admin.coupon_purchase_pending.index',compact('coupons')); 
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon = CouponPurchase::find($id);
        return view('admin.coupon_purchase_pending.view',compact('coupon')); 
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
        // return $id;
        $coupon = CouponPurchase::find($id);
        $coupon ->status = 1;
        $coupon->save();
        return redirect('purchase_pendings')->with('status','Coupon Purchase Completed');

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
}
