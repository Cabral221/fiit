<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Newsletter extends Mailable
{
    use Queueable, SerializesModels;

    public $emailSubscriber = "";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailSubscriber)
    {
        $this->emailSubscriber = $emailSubscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.news.letter');
    }
}
