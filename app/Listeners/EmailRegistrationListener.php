<?php

namespace App\Listeners;

use App\Events\RegistrationEvent;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Http\Requests\UserValidationRequest;
use App\Http\Resources\UserResource;
use App\Mail\UserRegisterationMessage;
use Illuminate\Support\Facades\Mail;


class EmailRegistrationListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(RegistrationEvent $event)
    {
        Mail::to($event->email)->send(new UserRegisterationMessage());
        
    }
}
