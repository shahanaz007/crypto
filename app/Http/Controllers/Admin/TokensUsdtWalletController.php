<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{tokens_usdt_wallet,TokenWithdrawal};

class TokensUsdtWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $withdraw_requests = TokenWithdrawal::where('status','0')->paginate(10);
        return view('admin.token_withdraw_request.index',compact('withdraw_requests'));
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
        tokens_usdt_wallet::credit($request->user_id,$request->no_of_tokens,$request->coin,$request->remark);
        return redirect('users')->with('status','Tokens Credited Successfully');
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

    public function change_status($id){

        $withdraw_requests = TokenWithdrawal::find($id);
        $withdraw_requests->status = 100;
        $withdraw_requests->save(); 
        return redirect()->back();
    }


    public function reject($id){

        $withdraw_requests = TokenWithdrawal::find($id);
        $withdraw_requests->status = -1;
        $withdraw_requests->save(); 
        return redirect()->back();
    }
}
