<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Evaluation extends Mailable
{
    use Queueable, SerializesModels;

    public $applicant_name;
    public $applicant_no;
    public $userId;

    public function __construct($userId, $applicant_name, $applicant_no)
    {
        $this->applicant_name = $applicant_name;
        $this->applicant_no = $applicant_no;
        $this->userId = $userId;
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Result of Evaluation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(

            view: 'mail.result_evaluation',
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
