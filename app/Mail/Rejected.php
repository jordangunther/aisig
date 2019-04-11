<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Rejected extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $name;
    protected $reject;
    protected $messageInput;
    protected $mailCategory;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $reject, $messageInput, $mailCategory)
    {
        $this->name = $name;
        $this->reject = $reject;
        $this->messageInput = $messageInput;
        $this->mailCategory = $mailCategory;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $whatToDo = '';
        if ($this->mailCategory === 'user'){
            $whatToDo = 'Thank you for your interest in becoming a Contributor to (Administrator for) the IASIG education website.  Unfortunately, you were not selected as a Contributor (an Administrator) at this time.  We wish you the best of luck and we encourage you to try again in the future.';
        }
        if ($this->mailCategory === 'course'){
            $whatToDo = 'Thank you for submitting content for use on the IASIG education website.  Sadly, your submission is not quite what we are looking for.  Please feel free to tweak your content and re-submit, or if you have any questions, contact us at';
        }
        if ($this->mailCategory === 'lesson'){
            $whatToDo = 'Thank you for submitting content for use on the IASIG education website.  Sadly, your submission is not quite what we are looking for.  Please feel free to tweak your content and re-submit, or if you have any questions, contact us at';
        }
        return $this->view('emails.user.reject')->with([
            'name' => $this->name,
            'messageInput' => $this->messageInput,
            'type' => $this->reject,
            'whatToDo' => $whatToDo,
        ]);
    }
}
