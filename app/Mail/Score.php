<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Score extends Mailable
{
    use Queueable, SerializesModels;

    public $applicant_name;
    public $applicant_no;
    public $score;
    public $total;
    public $stanine;

    public function __construct($applicant_name, $applicant_no, $score, $total, $stanine)
    {
        $this->applicant_name = $applicant_name;
        $this->applicant_no = $applicant_no;
        $this->score = $score;
        $this->stanine = $stanine;
        $this->total = $total;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Result of Examination',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.result_exam',
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
