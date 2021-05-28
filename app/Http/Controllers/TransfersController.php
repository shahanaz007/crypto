<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transfer;
use App\Models\User;
use Auth;

class TransfersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transfers = Transfer::where('from',Auth::user()->id)->get();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transfer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $user = User::where('email',$request->to_email)->first();
        if($request->tokens > Auth::user()->available_tokens){
            return redirect('/home')->with('status','Insufficient Tokens for Requested Transfer');
        }

        if(!$user){
            return redirect('/home')->with('status','No Such User Found');
        }

        $transfers = new Transfer;
        $transfers->from = Auth::user()->id;
        $transfers->to = $user->id;
        $transfers->tokens = $request->tokens;
        $transfers->status = '100';
        $transfers->save();

        $result =  Transfer::transfer_token($transfers->from,$transfers->to,$transfers->tokens);

        if ($result == 200) {
            
            return redirect('/home')->with('status','Transfer Completed');
        }

      return redirect('/home')->with('status','Something Went Wrong');   

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
