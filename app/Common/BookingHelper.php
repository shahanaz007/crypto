<?php

namespace App\BookingHelper;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

class API 
{
	public static function authenticate()
	{
		     $response = Http::asForm()->post('https://test.api.amadeus.com/v1/security/oauth2/token', [
						    'grant_type' => 'client_credentials',
						    'client_id' => 'rDAvvTNr46GHfvsKsWwHsSMrQT7NOTZA',
						    'client_secret' => 'XUKwmhn2Ft05D10G',
						]);
		     return $response;
	}

}
