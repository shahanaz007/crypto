<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Kyc,User};


class KycController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kyc_requests = Kyc::where('status','0')->paginate(10);
        return view('admin.kyc.index',compact('kyc_requests'));
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
        $kyc_requests    = Kyc::find($id);
        // return $merchant_requests;
        return view('admin.kyc.view',compact('kyc_requests'));
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
    public function approve($id){
        // return $id;
        $kyc_requests         = kyc::find($id);
        $kyc_requests->status = 1;
        $kyc_requests->save(); 

        $user_id            = $kyc_requests->user_id;
        $user               = User::find($user_id);
        $user->kyc_approved = 1;
        $user->save();
        return redirect('admin_kyc');
    }


    public function reject($id){
        $kyc_requests = Kyc::find($id);
        $kyc_requests->status = -1;
        $kyc_requests->save(); 
        return redirect('admin_kyc');
    }
}
