<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Deleted extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $name;
    protected $delete;
    protected $messageInput;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $delete, $messageInput)
    {
        $this->name = $name;
        $this->delete = $delete;
        $this->messageInput = $messageInput;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.user.delete')->with([
            'name' => $this->name,
            'messageInput' => $this->messageInput,
            'type' => $this->delete,
        ]);
    }
}
