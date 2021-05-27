<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hexters\CoinPayment\CoinPayment;


class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
  $transaction['buyer_name'] = 'Jhone Due';
  $transaction['buyer_email'] = 'buyer@mail.com';
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





  // $transaction['payload'] = [
  //   'foo' => [
  //       'bar' => 'baz'
  //   ]
  // ];

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
}
