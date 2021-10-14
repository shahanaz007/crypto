<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CoinAddress,Tokenpurchase,User,Reward,tokens_usdt_wallet};
use Carbon\Carbon;
use Auth;

class TokenPurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coins = CoinAddress::get();
        return view('token_purchase.create',compact('coins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id               = Auth::user()->id;

        $tokens                = new Tokenpurchase;
        $tokens->user_id       = $user_id;
        $tokens->no_of_tockens = $request->no_of_tokens;
        $tokens->coin          = $request->coin;
        $tokens->date          = Carbon::now()->format('Y-m-d');
        $tokens->save();

        $user = User::where('id',$user_id)->first();
        if($user->referby){
            $refferedby =  User::find($user->referby);
            if($refferedby)
            {   
                $amount = 1;
                $date   = Carbon::now()->format('Y-m-d');

                Reward::get_reward($user->referby,$amount,$date);
                tokens_usdt_wallet::credit($user->referby,$amount);
            }
        }
        return redirect('token_purchase')->with('status','Tokens Purchased Successfully');
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
