<?php

namespace App\Listeners;

use App\Events\Requests;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RequestListener implements ShouldQueue
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
     * @param  Request  $event
     * @return void
     */
    public function handle(Requests $event)
    {
         dd( $event);
    }
}
