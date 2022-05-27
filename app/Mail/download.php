<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class download extends Mailable
{
    use Queueable, SerializesModels;

    public $download;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($download)
    {
        $this->download= $download;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.download');
        
    }
}
