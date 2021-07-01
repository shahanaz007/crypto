<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\MerchantRequest;

class MerchantsController extends Controller
{
	//function for merchant request form 01-07-2021
    public function merchant_request()
    {
    	return view('merchant_request.create');
    }	

    //function to store merchant request 01-07-2021
    public function merchant_request_store(Request $request)
    {
    	$company_name 	 = $request->company_name;
    	$company_address = $request->company_address;
    	$company_email 	 = $request->company_email;
    	$user_id 		 = Auth()->user()->id;

    	$merchant_requests                  = new MerchantRequest;
    	$merchant_requests->user_id         = $user_id;
    	$merchant_requests->company_name    = $company_name;
    	$merchant_requests->company_address = $company_address;
    	$merchant_requests->company_email   = $company_email;
    	$merchant_requests->status = 0;
    	$merchant_requests->save();

    	return redirect('/home')->with('status','Merchant request sent successfully');

    }

}
