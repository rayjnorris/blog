<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    
    protected $mailuser;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailuser)
    {
        $this->user = $mailuser;
    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.welcome')->with([
            'name' => $this->user,
            ]);
    }

    
}
