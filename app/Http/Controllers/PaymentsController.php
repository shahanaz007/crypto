<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hexters\CoinPayment\CoinPayment;
use Hexters\CoinPayment\Traits\ApiCallTrait;
use Hexters\CoinPayment\Helpers\CoinPaymentHelper;
use Hexters\CoinPayment\Entities\CoinpaymentTransaction;
use App\Models\Order;
use Auth;

class PaymentsController extends Controller
{   
    use ApiCallTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return CoinPayment::getstatusbytxnid("CPFE1W4PB5Y24KTPNZVZQ5TQVN");
        $payments = CoinPayment::gettransactions()
                                ->where('user_id', Auth::user()->id)
                                ->paginate(10);
        // print_r($payments) ;
        return view('payment.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {   
        $coins = CoinPayment::getRates();

         
         $usd_rate = $coins['result']['USD']['rate_btc'];

         
         $coins = $coins['result'];
        return view('payment.deposit',compact('coins'));
    }


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

    public function check_for_update($txn_id){
        CoinPayment::getstatusbytxnid($txn_id);
        return redirect()->back();
    }

    public function check_for_status($txn_id){
        CoinPayment::getstatusbytxnid($txn_id);
        $transaction = CoinpaymentTransaction::where('txn_id', $txn_id)->first();

        // $info = $this->api_call('get_tx_info', ['txid' => $txn_id]);
        //     if($info['error'] != 'ok'){
        //         throw new Exception($info['error']);
        //     }
        //     return $info['result'];

        return view('payment.deposit2',compact('transaction'));
    }
    

    public function get_rate_of_currency(Request $request)
    {
        
        $currency = $request->currency;
        $coins = CoinPayment::getRates();

         
         $usd_rate = $coins['result']['USD']['rate_btc'];

         $rate['usd_rate'] = $usd_rate;
         $rate['currency_rate'] = $coins['result'][$currency]['rate_btc'];
         
         

         return $rate;

    }

    public function deposit($currency)
    {
 
        $deposit =  $this->api_call('get_callback_address', [
            'currency' => $currency
        ]);
        // return $deposit['result'];
        $qr = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data='.$deposit['result']['address'];

        $transaction['user_id']       = Auth::user()->id;
        $transaction['buyer_name']       = Auth::user()->name;
        $transaction['buyer_email']      = Auth::user()->email;
        $transaction['currency_code']    = $currency;
        $transaction['address']          = $deposit['result']['address'];
        $transaction['coin']             = $currency;
        $transaction['payment_address']  = $deposit['result']['address'];
        $transaction['qrcode_url']       = $qr;
        $transaction['status']           = '0';

        $transaction =  CoinpaymentTransaction::create($transaction);

        return view('payment.test',compact('deposit','qr','currency','transaction'));
    }   

    public function deposit2(Request $request)
    {
  $transaction['order_id'] = uniqid(); // invoice number
  $transaction['amount'] = (FLOAT) $request->amount ;
  $transaction['note'] = 'Transaction note';

  $transaction['buyer_name'] = Auth::user()->name;
  $transaction['buyer_email'] = Auth::user()->email;
  $transaction['redirect_url'] = url('/home'); // When Transaction was comleted
  $transaction['cancel_url'] = url('/home'); // When user click cancel link
  $transaction['currency1'] = $request->currency;
  $transaction['currency2'] = $request->currency;

$currency = 'BTC';
        $deposit =  $this->api_call('create_transaction', $transaction);

        $info = $this->api_call('get_tx_info', ['txid' => $deposit['result']['txn_id']]);
            if($info['error'] != 'ok'){
                throw new Exception($info['error']);
            }
            // return $info['result'];
        $result = $deposit['result'];
        

        $pay = array_merge($deposit['result'],  $info['result'], [
                'user_id'  => Auth::user()->id,  
                'order_id' => $request->order_id,
                'amount_total_fiat' => $request->amountTotal,
                'payload' => $request->payload,
                'buyer_name' => Auth::user()->name,
                'buyer_email' => Auth::user()->email,
                'currency_code' => $transaction['currency2'],
                'redirect_url' => $request->redirect_url,
                'cancel_url' => $request->cancel_url,
                'checkout_url' => $request->checkout_url,
            ]);
       $transaction =  CoinpaymentTransaction::create($pay);
        // return $transaction;
        return view('payment.deposit2',compact('transaction'));
    }


    public function convert()
    {
        return redirect('/home')->with('error','Something Went Wrong. Try Again Later..');
    }

}
