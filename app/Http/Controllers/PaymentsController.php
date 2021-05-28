<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hexters\CoinPayment\CoinPayment;
use App\Models\Order;
use Auth;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return CoinPayment::getstatusbytxnid("CPFE1W4PB5Y24KTPNZVZQ5TQVN");
        $payments = CoinPayment::gettransactions()
                                // ->where('status', 0)
                                ->paginate(10);
        // print_r($payments) ;
        return view('payment.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_order(Request $request)
    {

  $tokens = $request->tokens;


  $transaction['order_id'] = uniqid(); // invoice number
  $transaction['amountTotal'] = (FLOAT) 1.0 * $tokens;
  $transaction['note'] = 'Transaction note';
  $transaction['buyer_name'] = Auth::user()->name;
  $transaction['buyer_email'] = Auth::user()->email;
  $transaction['redirect_url'] = url('/home'); // When Transaction was comleted
  $transaction['cancel_url'] = url('/home'); // When user click cancel link


  /*
  *   @required true
  *   @example first item
  */
  $transaction['items'][] = [
    'itemDescription' => 'Tokens',
    'itemPrice' => (FLOAT) 1.0 * $tokens, // USD
    'itemQty' => (INT) $tokens,
    'itemSubtotalAmount' => (FLOAT) 1.0 * $tokens // USD
  ];

  $order = new Order;
  $order->order_id =  $transaction['order_id'];
  $order->user_id = Auth::user()->id;
  $order->tokens = $tokens;
  $order->save();



  // $transaction['payload'] = [
  //   'foo' => [
  //       'bar' => 'baz'
  //   ]
  // ];

  // return $transaction;
  return redirect(CoinPayment::generatelink($transaction));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function withdraw()
    // public function withdraw(Request $request)
    {
        // $amount= $request->amount;
$amount = 1;
  // $transaction['order_id'] = uniqid(); // invoice number
  $transaction['amount'] = $amount;
  $transaction['note'] = 'Transaction note';
  $transaction['currency'] = 'LTCT';
  $transaction['address'] = 'mjseCa7E67fN75pFXDH6X7dFuLtzrCrueR';
  // $transaction['redirect_url'] = url('/home'); // When Transaction was comleted
  // $transaction['cancel_url'] = url('/home'); // When user click cancel link


  return CoinPayment::createWithdrawal($transaction);
    }

}
