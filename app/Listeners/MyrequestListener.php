<?php

namespace App\Listeners;

use App\Events\Myrequests;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class MyrequestListener
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
     * @param  Myrequests  $event
     * @return void
     */
    public function handle(Myrequests $event)
    {
        //
    }
}
