<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoinpaymentTransaction;
use Hexters\CoinPayment\CoinPayment;
use Auth;

class TransactionController extends Controller
{
    //
    public function index()
    {
        $payments = CoinPayment::gettransactions()
                                ->where('user_id', Auth::user()->id)
                                ->paginate(10);
        // print_r($payments) ;
        return view('transaction',compact('payments'));

    }
}
