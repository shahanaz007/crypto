<?php

namespace App\common;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Hexters\CoinPayment\CoinPayment;

class Common 
{

	public function get_rate_of_currency(Request $request)
    {
        
        $currency = $request->currency;
        $coins = CoinPayment::getRates();

         
         $usd_rate = $coins['result']['USD']['rate_btc'];

         $rate['usd_rate'] = $usd_rate;
         $rate['currency_rate'] = $coins['result'][$currency]['rate_btc'];
         
         

         return $rate;

    }

     public static function transfer_currency($transfer)
    {
        $from   = $transfer['from_id'];
        $to     = $transfer['to_id'];
        $currency_code = $transfer['currency_code'];
        $amount     = $transfer['amount'];


    }

    public static function convert_to_usd($amount,$currency)
    {
        $currency = $currency;
        $coins    = CoinPayment::getRates();

        $usd_rate          = $coins['result']['USD']['rate_btc'];
        $currency_btc_rate = $coins['result'][$currency]['rate_btc'];

        // calculating ,converting to btc
        $btc_amount       = $amount * $currency_btc_rate;

        // converting to USD
        $converted_usd  = $btc_amount /  $usd_rate;

        return $converted_usd;
        
    }

}
