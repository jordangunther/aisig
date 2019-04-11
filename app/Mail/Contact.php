<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $email;
    protected $type;
    protected $messageInput;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $type, $messageInput)
    {
        $this->email = $email;
        $this->type = $type;
        $this->messageInput = $messageInput;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $setup = '';
        if ($this->type === 'admin'){
            $setup = 'You have a new contact message from '. $this->email;
        }
        if ($this->type === 'user'){
            $setup = 'Your message has been sent! Know your questions and comments are very important to us. Please allow 1-2 business days for an IASIG Representative to contact you.';
        }
        return $this->view('emails.user.contact')->with([
            'email' => $this->email,
            'messageSetup' => $setup,
            'messageInput' => $this->messageInput,
        ]);
    }
}
