<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdrawal;

class AdminController extends Controller
{
    public function withdraw_request_index(){
    	$withdraw_requests = Withdrawal::paginate(10);
    	return view('admin.withdraw_request.index',compact('withdraw_requests'));
    }
    public function change_status($id){

    	$withdraw_requests = Withdrawal::find($id);
    	$withdraw_requests->status = 1;
    	$withdraw_requests->save();	
    	return redirect()->back();
    }
}
