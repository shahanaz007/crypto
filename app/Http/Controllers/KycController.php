<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kyc;
use Illuminate\Support\Str;
Use Redirect;
use Intervention\Image\ImageManagerStatic as Image;


class KycController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kyc.create');
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
        $pancard_no  = $request->pancard_no;
        $idcard_no   = $request->idcard_no;
        $pancard_img = $request->pancard_img;
        $idcard_img  = $request->idcard_img;
        $user_id     = Auth()->user()->id;

        if($pancard_img){
            $extension_option = $pancard_img->getClientOriginalExtension();
            if(($extension_option=='png')||($extension_option=='jpeg')||($extension_option=='jpg')||($extension_option=='PNG')||($extension_option=='JPEG')||($extension_option=='JPG')){
                    $orginal_option_name = $pancard_img ->getClientOriginalName();
                    $new_image = $orginal_option_name. '-' .Str::random(20). '.'. $extension_option;
                    $pan_image_path = '/uploads/images/kyc/'.$new_image;
                  

                  // $pancard_img->move(base_path().'/public/uploads/kyc', $new_image);
                   // --------- [ Resize Image ] ---------------
                    $file = $pancard_img;
                    $filename = $orginal_option_name;
                    $img = \Image::make($file);
                    $img->resize(100, 100)->save(public_path($pan_image_path));

            }
            else{
                return Redirect::back()->with('error', 'Please upload Pan Card Image!');
            }
        }
        if($idcard_img){
            $extension_option = $idcard_img->getClientOriginalExtension();
            if(($extension_option=='png')||($extension_option=='jpeg')||($extension_option=='jpg')||($extension_option=='PNG')||($extension_option=='JPEG')||($extension_option=='JPG')){
                  $orginal_option_name = $idcard_img ->getClientOriginalName();
                  $new_image = $orginal_option_name. '-' .Str::random(20). '.'. $extension_option;
                  $id_image_path = '/uploads/images/kyc/'.$new_image;

                  // --------- [ Resize Image ] ---------------
                    $file = $idcard_img;
                    $filename = $orginal_option_name;
                    $img = \Image::make($file);
                    $img->resize(100, 100)->save(public_path($id_image_path));
            }
            else{
                return Redirect::back()->with('error', 'Please upload Id Card Image!');
            }
               
        }
        $kyc             = new Kyc;
        $kyc->user_id    = $user_id;
        $kyc->pancard_no = $pancard_no;
        $kyc->pancard_img= ($request->has('pancard_img'))?$pan_image_path:null;
        $kyc->idcard_no  = $idcard_no;
        $kyc->idcard_img = ($request->has('idcard_img'))?$id_image_path:null;
        $kyc->save();
        return redirect('kyc')->with('status','KYC Requested successfully');
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
