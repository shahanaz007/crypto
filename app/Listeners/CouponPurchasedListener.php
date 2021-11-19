<?php

namespace App\Listeners;

use App\Events\CouponPurchasedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CouponPurchasedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $qty;
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  CouponPurchasedEvent  $event
     * @return void
     */
    public function handle(CouponPurchasedEvent $event)
    {
        $data=[
            'msg' =>"New Coupon Purchase",
            'name'=>$event->details->user->name,
            'brand' => $event->details->brand_name,
            'amount' => $event->details->coupon_value,
            'qty' => $event->qty,
            'region' => $event->details->region_name,
            ];

            $data1=[
                'msg' =>"Thank you for shopping with Swiz Mart. You have successfully purchased the coupon",
                'brand' => $event->details->brand_name,
                'amount' => $event->details->coupon_value,
                'qty' => $event->qty,
                'region' => $event->details->region_name,    
            ];


        $mail_to = config('app.admin_email'); 
        $user_mail =  $event->details->user->email; 
            \Mail::to($mail_to)->send(new \App\Mail\CouponPurchased($data));
            \Mail::to($user_mail)->send(new \App\Mail\UserCouponPurchased($data1));
    }
}
