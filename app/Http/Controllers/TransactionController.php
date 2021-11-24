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
                    ->where('user_id', Auth::user()->id)->get();

        $debits = Withdrawal::where('user_id', Auth::user()->id)->get();   

        $payments = $credits->merge($debits)->sortByDesc('created_at');       
         // return $result;  

        return view('transaction',compact('payments'));

    }
}
