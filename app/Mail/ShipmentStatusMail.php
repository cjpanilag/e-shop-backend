<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShipmentStatusMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from = config('mail.from'); 
        $subject = "Shipment status";
            
        return $this->view('shipmentStatus')
                    ->from($from['address'], $from['name'])
                    ->cc($from['address'], $from['name'])
                    ->bcc($from['address'], $from['name'])
                    ->replyTo($from['address'], $from['name'])
                    ->subject($subject);
    }
}
