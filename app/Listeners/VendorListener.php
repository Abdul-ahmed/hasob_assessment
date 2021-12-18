<?php

namespace App\Listeners;

use App\Events\VendorEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class VendorListener
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
     * @param  \App\Events\VendorEvent  $event
     * @return void
     */
    public function handle(VendorEvent $event)
    {
        return response()->json($event);
        // dd($event);
    }
}
