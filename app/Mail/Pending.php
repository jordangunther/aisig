<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Pending extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $user;
    protected $content;
    protected $mailCategory;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $content, $mailCategory)
    {
        $this->user = $user;
        $this->content = $content;
        $this->mailCategory = $mailCategory;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        if ($this->mailCategory === 'course'){
            $type = 'Course';
            $name = $this->content->course_title;
            $description = $this->content->description;
            $filterType = 'Category';
            $filterContent = $this->content->category;
        }
        if ($this->mailCategory === 'lesson'){
            $type = 'File';
            $name = $this->content->lesson_title;
            $description = $this->content->description;
            $filterType = 'Course';
            $filterContent = $this->content->course;
        }
        return $this->view('emails.admin.pending')->with([
            'username' => $this->user->first_name . ' ' . $this->user->last_name,
            'email' => $this->user->email,
            'contentType' => $type,
            'contentName' => $name,
            'contentDescription' => $description,
            'filterType' => $filterType,
            'filterContent' => $filterContent,
        ]);
    }
}
