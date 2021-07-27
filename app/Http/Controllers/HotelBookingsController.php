<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelBookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://hotels4.p.rapidapi.com/locations/search?query=new%20york&locale=en_US",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    // CURLOPT_ENCODING => "application/json",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: hotels4.p.rapidapi.com",
        "x-rapidapi-key: 0b2d75c28emsh0bb015245e9dca8p1dc609jsn81f76a683863",
        'Content-Type: application/json'
    ],
]);

// curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json'
//     ));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    
    // $tmp = explode(",",strval($response));

    return $response[0];
}
        return view('hotels.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
    }

    public function search_result(Request $request)
    {
        return view('hotels.hotels');
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
}
