<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CouponPurchase};
use Auth;


class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {

        $this->middleware(['auth','verified']);
    }
    
    public function index()
    {
        $user_id    = Auth::user()->id;        

        $coupons    = CouponPurchase::join('coupons','coupon_purchases.coupon_id','coupons.id')
                        ->select('coupon_purchases.*')
                        ->where('coupon_purchases.user_id','=',$user_id)
                        ->where('coupon_purchases.status','=',1)
                        ->orderBy('id','DESC')->get(); 
                    
        return view('my_coupons.index',compact('coupons'));            
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
        //
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
}
