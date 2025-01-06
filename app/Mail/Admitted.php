<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Admitted extends Mailable
{
    use Queueable, SerializesModels;


    public $id;
    public $applicant_name;
    public $applicant_no;
    public $student_no;
    public $program_name;

    public function __construct($id, $applicant_name, $applicant_no, $program_name, $student_no)
    {
        $this->applicant_name = $applicant_name;
        $this->applicant_no = $applicant_no;
        $this->program_name = $program_name;
        $this->id = $id;
        $this->student_no = $student_no;
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
