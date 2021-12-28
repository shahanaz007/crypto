<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CoinpaymentTransaction,Withdrawal};
use Hexters\CoinPayment\CoinPayment;
use Auth;

class TransactionController extends Controller
{
    //
    public function index()
    {
        $credits = CoinPayment::gettransactions()
                    ->where('user_id', Auth::user()->id)
                    ->where('status',100)
                    ->select('id','received_usd','created_at')
                    ->orderBy('id','DESC')->paginate(50);
                        // return count($credits);

        $debits = Withdrawal::where('user_id', Auth::user()->id)
                    ->where('status',100)
                    ->select('id','amount','created_at')
                    ->orderBy('id','DESC')
                    ->paginate(50);   

                        // return count($debits);
        $payments = $credits->merge($debits)->sortByDesc('created_at');       
         // return count($payments);
            // dd($payments);
        return view('transaction',compact('payments'));

    }
}
