<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hexters\CoinPayment\Traits\ApiCallTrait;
use Hexters\CoinPayment\Entities\CoinpaymentTransaction;
use App\Models\{CoinAddress,User};
use Exception;
use Auth;

class CoinAddressesController extends Controller
{   
    use ApiCallTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $currencies = ['BTC','ETH','TRX','USDT.BEP2','LTCT'];

        // foreach($currencies as $currency)
        // {
        //     echo $currency.'<br>';
        // }

        $coinaddresses =  Auth::user()->coinaddresses;

        // return $coinaddresses;
        return view('coinaddress.index',compact('coinaddresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(count(Auth::user()->coinaddresses) > 0 )
        {
            return Auth::user()->coinaddresses;
        }
            $currencies = ['BTC','ETH','TRX','USDT.BEP2','LTCT'];

            foreach($currencies as $currency)
            {

                $deposit =  $this->api_call('get_callback_address', [
                    'currency' => $currency,
                    'ipn_url' =>url('/coinaddress_ipn')
            ]);

            $transaction['user_id']          = Auth::user()->id;
            $transaction['currency_code']  = $currency;
            $transaction['address']  = $deposit['result']['address'];
                CoinAddress::create($transaction);

                echo $currency.' __OK__<br>';

            }
        
            return redirect('/coinaddress');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if(Auth::user()->coinaddresses)
        {
            return Auth::user()->coinaddresses;
        }
            $currencies = ['BTC','ETH','TRX','USDT.BEP2','LTCT'];

            foreach($currencies as $currency)
            {

                $deposit =  $this->api_call('get_callback_address', [
                    'currency' => $currency
            ]);

            $transaction['user_id']          = Auth::user()->id;
            $transaction['currency_code']  = $currency;
            $transaction['address']  = $deposit['result']['address'];
                CoinAddress::create($transaction);

            }
        
            return Auth::user()->coinaddresses;

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
 

    public function ipn(Request $request)
    {   
        $address = $request->address;
        $coin_address = CoinAddress::where('address',$address)->first();

        if($coin_address && $coin_address->user)
        {

        $user = $coin_address->user;
        // return $user;
        $info = $this->api_call('get_tx_info', ['txid' => $request->txn_id]);
            if($info['error'] != 'ok'){
                throw new Exception($info['error']);
            }


          $transaction['order_id']  = uniqid(); // invoice number
          $transaction['user_id']   = $coin_address->user->id;
          $transaction['amount']    = (FLOAT) $request->amount;
          $transaction['note']      = 'Transaction note';

          $transaction['buyer_name']    = $coin_address->user->name;
          $transaction['buyer_email']   = $coin_address->user->email;
          $transaction['redirect_url']  = url('/home'); // When Transaction was comleted
          $transaction['cancel_url']    = url('/home'); // When user click cancel link
          $transaction['currency_code'] = $request->currency;
          $transaction['coin']          = $request->currency;

          $pay = array_merge($request->toArray(),  $info['result'], [
                'user_id'  => $coin_address->user->id,  
                'order_id' => uniqid(),
                'amount_total_fiat' => $request->fiat_amount,
                'payload' => $request->payload,
                'buyer_name' => $coin_address->user->name,
                'buyer_email' => $coin_address->user->email,
                'currency_code' => $request->currency,
                'redirect_url' => url('/home'),
                'cancel_url' => url('/home'),
                'checkout_url' => url('/home'),
            ]);
       $transaction =  CoinpaymentTransaction::create($pay);

        // return $transaction;
        
        }
        else{
                throw new Exception('The deposit address '.$address.' not found / stored for any user');
        }

        
    }


    public function test(Request $request){

        $user= User::find($request->user_id);

        return $user->debit($request);

        // $info = $this->api_call('get_tx_info', ['txid' => 'CPFE1W4PB5Y24KTPNZVZQ5TQVN']);
        //     if($info['error'] != 'ok'){
        //         throw new Exception($info['error']);
        //     }

        //     return $info;
    }
}
