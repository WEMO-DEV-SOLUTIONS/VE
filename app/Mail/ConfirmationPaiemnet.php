<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmationPaiemnet extends Mailable
{
    use Queueable, SerializesModels;
     public $code_paiement;

    /**
     * Create a new message instance.
     *
     * @param $code_paiement
     */
    public function __construct($code_paiement)
    {
        $this->code_paiement = $code_paiement;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('nationspourlEternel@gmail.com')->markdown('emails.paiement.confirme');
    }
}
