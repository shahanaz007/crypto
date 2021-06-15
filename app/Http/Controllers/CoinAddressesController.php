<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hexters\CoinPayment\Traits\ApiCallTrait;
use App\Models\CoinAddress;
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
                    'currency' => $currency
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
}
