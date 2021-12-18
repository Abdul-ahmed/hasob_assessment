<?php

namespace App\Listeners;

use App\Events\AssetEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AssetListener
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
     * @param  \App\Events\AssetEvent  $event
     * @return void
     */
    public function handle(AssetEvent $event)
    {
        return response()->json($event);
        // dd($event);
    }
}
