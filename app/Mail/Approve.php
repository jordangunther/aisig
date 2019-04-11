<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Approve extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $name;
    protected $approve;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $approve)
    {
        $this->name = $name;
        $this->approve = $approve;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $messageInput = 'test';
        $type = 'test';
        if ($this->approve === 'basic'){
            $messageInput = 'Congrats ' . $this->name . '! You are now an Basic User. Log into your IASIG account to begin to view IASIG courses and lessons.';
            $type = 'User Basic Access';
        }
        if ($this->approve === 'advance'){
            $messageInput = 'Congrats ' . $this->name . '! You are now an Advance User. Log into your IASIG account to begin to create courses and lessons.';
            $type = 'User Advance Access';
        }
        if ($this->approve === 'admin'){
            $messageInput = 'Congrats ' . $this->name . '! You are now an Admin User. Log into your IASIG account to begin to manage users, courses and lessons.';
            $type = 'User Admin Access';
        }
        if ($this->approve === 'course'){
            $messageInput = 'Congrats! Your course: ' . $this->name . ', has been approved! Log into your IASIG account to view your updated course.';
            $type = 'Course: ' . $this->name;
        }
        if ($this->approve === 'lesson'){
            $messageInput = 'Congrats! Your File: ' . $this->name . ', has been approved! Log into your IASIG account to view your updated file.';
            $type = 'File: ' . $this->name;
        }
        return $this->view('emails.user.approve')->with([
            'messageInput' => $messageInput,
            'type' => $type,
        ]);
    }
}
