<?php

namespace App\Mail;

use App\Models\Feedback;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotificationOfFeedback extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(
        public Feedback $feedback,
    )
    {
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            to: config('mail.to_address'),
            subject: 'Уведомление об обращении',
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'emails.feedback.notification',
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
