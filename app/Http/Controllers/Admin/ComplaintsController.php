<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Complaint,ComplaintSolution};
use Auth;


class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ids = [ 'open', 'processing', 'closed', 'deferred'];

        $queryOrder = "CASE WHEN status = 'open' THEN 1 ";
        $queryOrder .= "WHEN status = 'processing' THEN 2 ";
        $queryOrder .= "WHEN status = 'closed' THEN 3 ";
        $queryOrder .= "ELSE 4 END";
        
        $complaints = Complaint::orderByRaw($queryOrder)->paginate(10);
        
        return view('admin.complaints.index',compact('complaints'));
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
        $complaint = Complaint::find($id);
        $number    = ComplaintSolution::where('complaint_id',$id)->count();
        $solutions = ComplaintSolution::where('complaint_id',$id)->get();
        return view('admin.complaints.view',compact('complaint','number','solutions'));

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
        $user_id           = Auth::user()->id;

        $complaint         = Complaint::find($id);
        $complaint->status = $request->status;
        $complaint->save();

        if($request->solution)
        {
            $solution               = new ComplaintSolution;
            $solution->user_id      = $user_id;
            $solution->complaint_id = $id;
            $solution->solution     = $request->solution;
            $solution->save();
        }
        return redirect('complaints')->with('status','Response added successfully');
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
