<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponsController extends Controller
{
    //function to view coupon  02-07-2021
    public function coupon_index()
    {
    	$coupons = Coupon::paginate(10);
    	return view('admin.coupon.index',compact('coupons'));
    }	

    //function to add coupon  02-07-2021
    public function coupon_add()
    {
    	return view('admin.coupon.create');
    }

    //function to store coupon  02-07-2021
    public function coupon_store(Request $request)
    {
    	$category_name = $request->category_name;

    	$coupon_category = new Coupon;
    	$coupon_category->category_name = $category_name;
    	$coupon_category->save();
    	return redirect('/coupon/index')->with('status','Coupon Category Added Successfully');
    }	
}
