<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class Quotation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $mailContent;
    public function __construct($data, $subject)
    {
        $this->mailContent = $data;
        $this->subject = $subject;
        $this->from(Auth::guest() ? 'no-reply@freightwell.com' : Auth::user()->email, ucwords(Auth::guest() ? $subject : Auth::user()->name));
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.quotation.client', ['data' => $this->mailContent]);
    }
}
