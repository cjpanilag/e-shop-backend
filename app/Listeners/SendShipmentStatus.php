<?php

namespace App\Listeners;

use App\Events\ShipmentStatusProcess;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use \Mail;
use App\Mail\ShipmentStatusMail;
use App\Models\User;

class SendShipmentStatus
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
     * @param  \App\Events\ShipmentStatusProcess  $event
     * @return void
     */
    public function handle(ShipmentStatusProcess $event)
    {
        $data = $event->data;

        $user = User::find($data->user_id);

        Mail::to($user->email)->send(new ShipmentStatusMail($user));
    }
}
