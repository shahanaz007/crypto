<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Withdrawal;
use Hexters\CoinPayment\CoinPayment;
use App\Models\User;
use Auth;
class WithdrawalsController extends Controller
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
    public function create()
    {   
         $coins = CoinPayment::getRates();

         
         $usd_rate = $coins['result']['USD']['rate_btc'];

         
         $coins = $coins['result'];

         // return $coins['result']['USD'];
         // print_r($coins['result']['USD']); echo '<br><br>';


         // foreach ($coins['result'] as $coin) {

         //    if($coin['accepted']){
         //         print_r($coin); echo '<br><br>';
         //     }
         // }
         // exit;

         // return $coins;
        return view('withdraw.create',compact('usd_rate','coins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $amount = $request->amount;
        $currency = $request->currency;
        $address = $request->address;

        if($amount > Auth::user()->available_tokens)
        {
            return redirect('/home')->with('status','You dont have that much tokens in your account');
        }


        $wd =new Withdrawal;
        $wd->user_id = Auth::user()->id;
        $wd->w_id = uniqid();
        $wd->amount = $amount;
        $wd->currency_code = $currency;
        $wd->address = $address;
        $wd->status = 0;
        $wd->save();


        return redirect('/home')->with('status','Success. Withdrawal Requested Successfully !');

      // $transaction['order_id'] = uniqid(); // invoice number
      // $transaction['amount'] = $amount;
      // $transaction['note'] = 'Transaction note';
      // $transaction['currency'] = $currency;
      // $transaction['address'] = $address;
      // $transaction['redirect_url'] = url('/home'); // When Transaction was comleted
      // $transaction['cancel_url'] = url('/home'); // When user click cancel link


      // $result = CoinPayment::createWithdrawal($transaction);

      // if($result['error'] == 'ok' && $result['result']['id'])
      // {
        
      //   $wd =new Withdrawal;
      //   $wd->user_id = Auth::user()->id;
      //   $wd->w_id = $result['result']['id'];
      //   $wd->amount = $result['result']['amount'];
      //   $wd->currency_code = $currency;
      //   $wd->status = $result['result']['status'];
      //   $wd->save();

      //   User::withdraw($request->tokens);

      //   return redirect('/home')->with('status','Success. Withdrawal may take some time to reflect on your address');

      // }else{
      //   return $result;
      // }

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


    public function get_rate_of(Request $request)
    {
        
        $currency = $request->currency;
        $coins = CoinPayment::getRates();

         
         $usd_rate = $coins['result']['USD']['rate_btc'];

         $rate['usd_rate'] = $usd_rate;
         $rate['currency_rate'] = $coins['result'][$currency]['rate_btc'];
         
         

         return $rate;

    }
}
