<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Withdrawal,CoinpaymentTransaction};

class AdminController extends Controller
{
    public function withdraw_request_index(Request $request)
    {
    	$withdraw_requests = Withdrawal::where('status','0');
        if($request->from_date){
            $from_date =  $request->from_date.' 00:00:00';
        
            $withdraw_requests = $withdraw_requests->where('created_at','>=',$from_date);
        }
        
        if($request->to_date){
            $to_date   =  $request->to_date.' 23:59:59';
        
            $withdraw_requests = $withdraw_requests->where('created_at','<=',$to_date);
        }
        $withdraw_requests = $withdraw_requests->paginate(10);
    	return view('admin.withdraw_request.index',compact('withdraw_requests'));
    }


    public function change_status($id){

    	$withdraw_requests = Withdrawal::find($id);
    	$withdraw_requests->status = 100;
    	$withdraw_requests->save();	
    	return redirect()->back();
    }


    public function reject($id){

        $withdraw_requests = Withdrawal::find($id);
        $withdraw_requests->status = -1;
        $withdraw_requests->save(); 
        return redirect()->back();
    }

    public function dashboard(){
        $btc = CoinpaymentTransaction::where('currency_code','BTC')->where('status',100)->get()->sum('receivedf');

        $trx = CoinpaymentTransaction::where('currency_code','TRX')->where('status',100)->get()->sum('receivedf');

        $usdt = CoinpaymentTransaction::where('currency_code','USDT.BEP2')->where('status',100)->get()->sum('receivedf');

        $eth = CoinpaymentTransaction::where('currency_code','ETH')->where('status',100)->get()->sum('receivedf');

        return view('admin.dashboard',compact('btc','trx','usdt','eth'));

    }
}
