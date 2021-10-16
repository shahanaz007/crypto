<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
use App\Models\{tokens_usdt_wallet};


class TokensUsdtWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id               = Auth::user()->id;
        
        $token_credit_sum = tokens_usdt_wallet::where('user_id',$id)->where('coin','token')->get()->sum('credit');
        $usdt_credit_sum  = tokens_usdt_wallet::where('user_id',$id)->where('coin','usdt')->get()->sum('credit');

        $token_debit_sum  = tokens_usdt_wallet::where('user_id',$id)->where('coin','token')->get()->sum('debit');
        $usdt_debit_sum   = tokens_usdt_wallet::where('user_id',$id)->where('coin','usdt')->get()->sum('debit');

        $token_balance    = $token_credit_sum - $token_debit_sum;
        $usdt_balance     = $usdt_credit_sum - $usdt_debit_sum;

        $token_wallets    = tokens_usdt_wallet::where('user_id',$id)->paginate(10);

        return view('token_wallet.index',compact('token_wallets','token_balance','usdt_balance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
