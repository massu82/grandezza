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

class NotificarAdminCata extends Mailable {
    public function __construct(public Cata $cata, public RegistroCata $registro) {}
    public function build() {
        return $this->subject('Nuevo registro a cata')
            ->view('emails.notificar-admin');
    }
}
