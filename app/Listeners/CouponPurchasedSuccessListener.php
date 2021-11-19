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
        //
    }
}
