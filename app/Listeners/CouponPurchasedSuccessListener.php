<?php

namespace App\Listeners;

use App\Events\CouponPurchasedSuccessEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CouponPurchasedSuccessListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CouponPurchasedSuccessEvent  $event
     * @return void
     */
    public function handle(CouponPurchasedSuccessEvent $event)
    {
        $data=[
            'msg' =>"New Coupon Purchased Successfully",
            'name'=>$event->coupon->user->name,
            ];
        $mail_to = $event->coupon->user->email;    
            \Mail::to($mail_to)->send(new \App\Mail\CouponPurchasedSucess($data));
    }
}
