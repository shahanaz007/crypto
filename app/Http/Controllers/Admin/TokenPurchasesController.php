<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Tokenpurchase};
use Carbon\Carbon;

class TokenPurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $tokens = Tokenpurchase::where('status',1);

        if($request->from_date){
            $from_date =  $request->from_date;
        
            $tokens = $tokens->where('date','>=',$from_date);
        }
        
        if($request->to_date){
            $to_date   =  $request->to_date;
        
            $tokens = $tokens->where('date','<=',$to_date);
        }

        $tokens = $tokens->paginate(10);
        return view('admin.reports.purchase_reports',compact('tokens'));
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

    //admin to view sales of user  18-10-2021
    public function total_sales_of_user($id){

        $now   = Carbon::now();
        $month =  $now->month;
        $total_token  = Tokenpurchase::where('user_id',$id)->whereMonth('created_at', $month)->get()->sum('no_of_tockens');
        return view('admin.users.total_sales',compact('total_token'));        
    }
}