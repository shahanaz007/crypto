<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{StakeTokens};
use Auth;
use Carbon\Carbon;

class StakeTokensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stake_tokens = StakeTokens::paginate(10);
        return view('stake_tokens.index',compact('stake_tokens'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stake_tokens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $stake_tokens               = new StakeTokens;
        $stake_tokens->user_id      = $user_id;
        $stake_tokens->no_of_tokens = $request->no_of_tokens;
        $stake_tokens->date         = Carbon::now()->format('Y-m-d');
        $stake_tokens->save();
        return redirect('stake_tokens')->with('status','Stake Tokens Successfully');
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
