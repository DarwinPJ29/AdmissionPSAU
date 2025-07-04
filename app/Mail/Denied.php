<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Denied extends Mailable
{
    use Queueable, SerializesModels;


    public $applicant_name;
    public $applicant_no;
    public $reasons;
    public $programChoice;

    public function __construct($applicant_name, $applicant_no, $reasons, $programChoice)
    {
        $this->applicant_name = $applicant_name;
        $this->applicant_no = $applicant_no;
        $this->reasons = $reasons;
        $this->programChoice = $programChoice;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Notice of Evaluation Result',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.newDenied',
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
