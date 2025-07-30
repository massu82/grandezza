<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Cata;
use App\Models\RegistroCata;

class ConfirmacionRegistroCata extends Mailable {
    public function __construct(public Cata $cata, public RegistroCata $registro) {}
    public function build() {
        return $this->subject('Confirmación de registro')
            ->view('emails.confirmacion-cata');
    }
}
