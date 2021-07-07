<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\{Brand};
use Intervention\Image\ImageManagerStatic as Image;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::where('active','=',1)->paginate(10);
        return view('admin.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $path ='';
        if($request->has('logo')) {
            $image_path = '/uploads/images/brands/'. Str::random(20) .'.'.$request->logo->extension();
            // --------- [ Resize Image ] ---------------
            $file = $request->logo;
            $filename = $file->getClientOriginalName();
            $img = \Image::make($file);
            $img->resize(230, 230)->save(public_path($image_path));
        }

        $brands       = new Brand;
        $brands->name = $name;
        $brands->logo = ($request->has('logo'))?$image_path:null;
        $brands->save();
        return redirect('brand')->with('status','Brand Added successfully');
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
        $brands    = Brand::find($id);
        return view('admin.brand.edit',compact('brands'));
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
        $name = $request->name;

        $path ='';
        if($request->has('logo')) {
            $image_path = '/uploads/images/brands/'. Str::random(20) .'.'.$request->logo->extension();
            $file = $request->logo;
            $filename = $file->getClientOriginalName();
            $img = \Image::make($file);
            $img->resize(230, 230)->save(public_path($image_path));
           

        }
        else{
            $image_path = $request->old_logo;
           
        }

        $brands       = Brand::find($id);
        $brands->name = $name;
        $brands->logo = ($request->has('logo'))?$image_path:null;
        $brands->save();
        return redirect('brand')->with('status','Brand Updated successfully');
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
