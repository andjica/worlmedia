<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MatchEmail extends Mailable
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
        $emails = array(request()->useremail, "info@worldmediacrew.com");
        return $this->from('info@worldmediacrew.com')
        ->subject(request()->userauth.' with subject  '. 'ovo je proba')
        ->to($emails)
        ->view('emails.match')->with('data', $this->data);
    }
}
