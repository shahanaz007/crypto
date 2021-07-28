<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

class HotelBookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   


       

//      $response = Http::asForm()->post('https://test.api.amadeus.com/v1/security/oauth2/token', [
//     'grant_type' => 'client_credentials',
//     'client_id' => 'rDAvvTNr46GHfvsKsWwHsSMrQT7NOTZA',
//     'client_secret' => 'XUKwmhn2Ft05D10G',
// ]);

        $response = Http::withToken('ABWhqtbRJGUsXGkySQZG4mlCiPPy')->get('https://test.api.amadeus.com/v2//shopping/hotel-offers', [
            'cityCode' => 'LON',
            'checkInDate' => '2021-08-01',
            'checkOutDate' => '2021-08-02'
            
    
]);

return $response;



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
