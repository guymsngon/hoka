<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrajetMail extends Mailable
{
    use Queueable, SerializesModels;

    public $id_trajet;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($id_trajet)
    {
        $this->id_trajet = $id_trajet;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Proposition de trajet validée')->view('visiteur.emailTrajet');
    }
}
