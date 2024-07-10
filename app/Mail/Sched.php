<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Sched extends Mailable
{
    use Queueable, SerializesModels;


    public $applicant_name;
    public $sched;
    public $room;
    public function __construct($applicant_name, $sched, $room)
    {
        $this->applicant_name = $applicant_name;
        $this->sched = $sched;
        $this->room = $room;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Schedule of Exam',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.schedule_exam',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
