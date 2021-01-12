<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReserveMail extends Mailable
{
    use Queueable, SerializesModels;

    public $id_reserve;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id_reserve)
    {
        $this->id_reserve = $id_reserve;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Reservation de trajet validée')->view('visiteur.emailReserve');
    }
}
