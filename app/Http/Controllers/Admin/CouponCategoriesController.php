<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CouponCategory;

class CouponCategoriesController extends Controller
{
    //function to view coupon categories 02-07-2021
    public function coupon_category_index()
    {
    	$coupon_categories = CouponCategory::paginate(10);
    	return view('admin.coupon_category.index',compact('coupon_categories'));
    }	

    //function to add coupon categories 02-07-2021
    public function coupon_category_add()
    {
    	return view('admin.coupon_category.create');
    }

    //function to store coupon categories 02-07-2021
    public function coupon_category_store(Request $request)
    {
    	$category_name = $request->category_name;

    	$coupon_category = new CouponCategory;
    	$coupon_category->category_name = $category_name;
    	$coupon_category->save();
    	return redirect('/coupon_category/index')->with('status','Coupon Category Added Successfully');
    }	

    //function to view edit coupon categories 02-07-2021
    public function coupon_category_edit($id){

    	$coupon_categories 		   = CouponCategory::find($id);
    	return view('admin.coupon_category.edit',compact('coupon_categories'));
    }

    //function to update coupon categories 02-07-2021
    public function coupon_category_update(Request $request,$id){

    	$category_name             = $request->category_name;

    	$coupon_categories 		   = CouponCategory::find($id);
    	$coupon_categories->category_name = $category_name;
    	$coupon_categories->save();
    	return redirect('/coupon_category/index')->with('status','Coupon Category Updated Successfully');
    }

    //function to disable coupon categories 02-07-2021
    public function coupon_category_disable($id){

    	$coupon_categories 		     = CouponCategory::find($id);
    	$coupon_categories->disabled = 1;
    	$coupon_categories->save();
    	return redirect('/coupon_category/index');
    }
    //function to disable coupon categories 02-07-2021
    public function coupon_category_enable($id){

    	$coupon_categories 		     = CouponCategory::find($id);
    	$coupon_categories->disabled = 0;
    	$coupon_categories->save();
    	return redirect('/coupon_category/index');
    }
}
