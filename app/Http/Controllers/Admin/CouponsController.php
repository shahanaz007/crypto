<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Coupon,CouponCategory,Location,Brand};

class CouponsController extends Controller
{
    //function to view coupon  02-07-2021
    public function coupon_index()
    {
    	$coupons = Coupon::where('used','=',0)->paginate(10);
    	return view('admin.coupon.index',compact('coupons'));
    }	

    //function to add coupon  02-07-2021
    public function coupon_add()
    {
    	$categories = CouponCategory::where('disabled','=',0)->get();
        $locations  = Location::where('active','=',1)->get();
        $brands     = Brand::where('active','=',1)->get();
    	return view('admin.coupon.create',compact('categories','locations','brands'));
    }

    //function to store coupon  02-07-2021
    public function coupon_store(Request $request)
    {
    	$category_id   = $request->category_id;
        $location_id   = $request->location_id;
        $brand_id      = $request->brand_id;
    	$code          = $request->code;
    	$point         = $request->point;
    	$expiry_date   = $request->expiry_date;
    	$currency_code = $request->currency_code;
        $remarks       = $request->remark;

    	$coupon                = new Coupon;
    	$coupon->category_id   = $category_id;
        $coupon->location_id   = $location_id;
        $coupon->brand_id      = $brand_id;
    	$coupon->code          = $code;
    	$coupon->point         = $point;
    	$coupon->expiry_date   = $expiry_date;
    	$coupon->currency_code = $currency_code;
        $coupon->remarks       = $remarks;
    	$coupon->save();$coupon->remarks       = $remarks;
    	return redirect('/admin_coupon/index')->with('status','Coupon Added Successfully');
    }	

    //function to view edit coupon  02-07-2021
    public function coupon_edit($id){
    	$categories        = CouponCategory::where('disabled','=',0)->get();
        $locations         = Location::where('active','=',1)->get();
        $brands            = Brand::where('active','=',1)->get();
    	$coupons 		   = Coupon::find($id);
    	return view('admin.coupon.edit',compact('coupons','categories','locations','brands'));
    }

    //function to update coupon  02-07-2021
    public function coupon_update(Request $request,$id){

    	$category_id   = $request->category_id;
        $location_id   = $request->location_id;
        $brand_id      = $request->brand_id;
    	$code          = $request->code;
    	$point         = $request->point;
    	$expiry_date   = $request->expiry_date;
    	$currency_code = $request->currency_code;
        $remarks       = $request->remark;

    	$coupon	   		       = Coupon::find($id);
    	$coupon->category_id   = $category_id;
        $coupon->location_id   = $location_id;
        $coupon->brand_id      = $brand_id;
    	$coupon->code          = $code;
    	$coupon->point         = $point;
    	$coupon->expiry_date   = $expiry_date;
    	$coupon->currency_code = $currency_code;
        $coupon->remarks       = $remarks;
    	$coupon->save();
    	return redirect('/admin_coupon/index')->with('status','Coupon Updated Successfully');
    }
}
