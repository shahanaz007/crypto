<?php

namespace App\Listeners;

use App\Events\TokenPurchasedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TokenPurchasedListener
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
     * @param  TokenPurchasedEvent  $event
     * @return void
     */
    public function handle(TokenPurchasedEvent $event)
    {
        //
    }
}
