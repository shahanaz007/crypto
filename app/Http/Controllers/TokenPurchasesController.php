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
        if($request->no_of_tokens < 100){
            return redirect('token_purchase')->with('error','Purchase minimum 100 tokens');
        }
        else{
            $tokens                = new Tokenpurchase;
            $tokens->user_id       = $user_id;
            $tokens->no_of_tockens = $request->no_of_tokens;
            $tokens->coin          = $request->coin;
            $tokens->date          = Carbon::now()->format('Y-m-d');
            $tokens->save();

            $coin = "token";
            tokens_usdt_wallet::credit($user_id,$request->no_of_tokens,$coin);

        }    
        $user = User::find($user_id);
        if($user->referby){
            $refferedby =  User::find($user->referby);
            if($refferedby)
            {   
                // $amount = 1;
                // $coin   = "usdt";
                // $date   = Carbon::now()->format('Y-m-d');

                // Reward::get_reward($user->referby,$amount,$date,$coin);
                // tokens_usdt_wallet::credit($user->referby,$amount,$coin);

                Reward::give_rewards_for_referees_of($user_id,$request->no_of_tokens);
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

    public function my_legs()
    {
        $user_id = Auth::user()->id;
        $legs = User::where('referby',$user_id)->get();
        $datas = [];

        foreach($legs as $leg)
        {
            $name = $leg->name;
            $business_volume = Tokenpurchase::get_total_sales_of_user($leg->id);

            $datas[] = [
                'name'=>$name,
                'business_volume' => $business_volume,
            ];

        }

        return view('token_purchase.my_legs',compact('datas'));
        // return $datas;
    }
}
