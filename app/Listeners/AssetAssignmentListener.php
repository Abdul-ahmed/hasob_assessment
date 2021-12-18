<?php

namespace App\Listeners;

use App\Events\AssetAssignmentEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AssetAssignmentListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\AssetAssignmentEvent  $event
     * @return void
     */
    public function handle(AssetAssignmentEvent $event)
    {
        return response()->json($event);
        // dd($event);
    }
}
