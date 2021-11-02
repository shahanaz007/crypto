<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User};
use Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        // $users   = User::where('referby',$user_id)->paginate(10);

        $users   = Auth::user()->users_list();
        
        // return $users;
        return view('my_list.index',compact('users'));
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

    public function contactus(Request $request){
        // return $request;
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'title' => 'required',
            'comment'=> 'required',
            
        ]);
        $name       = $request->name;
        $email      = $request->email;
        $title      = $request->title;
        $comment    = $request->comment;
        
        $data=[
            'name'=>$name,
            'email' =>$email,
            'title' =>$title,
            'comment' =>$comment,
        ];
        \Mail::to('info@swiz.com')->send(new \App\Mail\ContactMail($data));
        // dd("Email is Sent, please check your inbox.");
        return redirect('contact')->with('message','Message Sent Successfully. We Will Connect You Soon. Thank You..');

}
}
