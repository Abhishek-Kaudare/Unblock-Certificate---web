<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $address = 'milanhazra234.mh@gmail.com';
        $subject = 'Authorization mail Unblock PRN';
        $name = 'Conduent';
        
        return $this->view('emails.test')
                    ->from($address, $name)
                    // ->cc($address, $name)
                    // ->bcc($address, $name)
                    // ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 'bmessage' => $this->data['bmessage'] ]);
    }
}