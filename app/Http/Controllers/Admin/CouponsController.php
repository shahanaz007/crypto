<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Coupon,CouponCategory,Location,Brand,Currency};
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use DB;
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
        $currencies = Currency::where('status',1)->get();
    	return view('admin.coupon.create',compact('categories','locations','brands','currencies'));
    }

    //function to store coupon  02-07-2021
    public function coupon_store(Request $request)
    {
        $path ='';
        if($request->has('code')) {

            $code_images = $request->code;
            $category_id   = $request->category_id;
            $location_id   = $request->location_id;
            $brand_id      = $request->brand_id;

            $point         = $request->point;
            $expiry_date   = $request->expiry_date;
            $currency_code = $request->currency_code;
            $remarks       = $request->remark;

        foreach($code_images as $code_image){
                
            $image_path = '/uploads/images/coupon/'. Str::random(20) .'.'.$code_image->extension();
            // --------- [ Resize Image ] ---------------
            $file = $code_image;
            $filename = $file->getClientOriginalName();
            $img = \Image::make($file);
            $img->resize(230, 230)->save(public_path($image_path));

            // image saved 

            $code          = ($code_image != '')?$image_path:null;
        

            $coupon                = new Coupon;
            $coupon->category_id   = $category_id;
            $coupon->location_id   = $location_id;
            $coupon->brand_id      = $brand_id;
            $coupon->code          = $code;
            $coupon->point         = $point; 
            $coupon->expiry_date   = $expiry_date;
            $coupon->currency_code = $currency_code;
            $coupon->remarks       = $remarks;
            $coupon->save();

        }
            return redirect('/admin_coupon/index')->with('status','Coupon Added Successfully');
        }
        
    	
    	return redirect()->back()->with('error','Coupon Images Missing');

        
    	
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
        if($request->status == 1 ){
            $coupon->status    = 1;
        }
        else{
            $coupon->status    = 0;
        }
    	$coupon->save();
    	return redirect('/admin_coupon/index')->with('status','Coupon Updated Successfully');
    }


    public function group(){
        $coupons = Coupon::where('used','=',0)
                            ->select('brand_id',DB::raw('count(id) as coupons'))
                            ->groupBy('brand_id')
                            ->get();
                            // return $coupons;
        return view('admin.coupon.group',compact('coupons'));

    }
    //list brand wise coupons 20-07-2021

     public function brand_coupon($id){
        $coupons = Coupon::where('used','=',0)
                    ->where('brand_id',$id)
                    ->paginate(10);
        return view('admin.coupon.index',compact('coupons'));
     }
}
