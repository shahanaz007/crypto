<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{MerchantRequest,User};

class MerchantsController extends Controller
{
	//function for admin to view merchants requests 01-07-2021
    public function merchant_request_index(){
    	$merchant_requests = MerchantRequest::where('status','0')->paginate(10);
    	return view('admin.merchant_request.index',compact('merchant_requests'));
    }

    public function change_status($id){
    	$merchant_requests 		   = MerchantRequest::find($id);
    	$merchant_requests->status = 1;
    	$merchant_requests->save();	

    	$user_id 		= $merchant_requests->user_id;
    	$user    		= User::find($user_id);
    	$user->merchant = 1;
    	$user->save();
    	return redirect('merchant_request/index');
    }


    public function reject($id){
        $merchant_requests = MerchantRequest::find($id);
        $merchant_requests->status = -1;
        $merchant_requests->save(); 
        return redirect('merchant_request/index');
    }
    //function to view the request 02-07-2021
    public function view($id){
        $merchant_requests         = MerchantRequest::find($id);
        // return $merchant_requests;
        return view('admin.merchant_request.view',compact('merchant_requests'));
    }
}
