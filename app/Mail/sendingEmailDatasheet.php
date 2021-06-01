<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendingEmailDatasheet extends Mailable
{
    use Queueable, SerializesModels;

/**
* Create a new message instance.
*
* @return void
*/

    public $emails;

    public function __construct($emails)
    {
        $this->emails = $emails;
    }

/**
* Build the message.s
*
* @return $this
*/
    public function build()
    {
        return $this->subject('Monatsberichtanmeldung für Benutzer')
                    ->view('email_template_datasheet')
                    ->with('emails', $this->emails);
}
}