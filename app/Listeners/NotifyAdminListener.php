<?php

namespace App\Listeners;

use App\Events\activationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAdminListener
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
     * @param  activationEvent  $event
     * @return void
     */
    public function handle(activationEvent $event)
    {
        //
    }
}
