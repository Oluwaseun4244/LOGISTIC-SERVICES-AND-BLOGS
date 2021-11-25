<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrackingID extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quotes)
    {
        return $this->quotes = $quotes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        {
            $name = "Banjo";
            $address = "banjotola12@gmail.com";
            $subject = "Email Verification";
            return $this->view('mail.trackingID')
                        ->from($address, $name)
                        ->replyTo($address, $name)
                        ->subject($subject)
                        ->with(["quotes"=>$this->quotes]);
        }
    }
}
