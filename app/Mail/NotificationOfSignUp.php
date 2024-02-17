<?php

namespace App\Mail;

use App\Models\Feedback;
use App\Models\UserCourse;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotificationOfSignUp extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(
        public UserCourse $userCourse,
    )
    {
    }


    public function envelope(): Envelope
    {
        return new Envelope(
            to: config('mail.to_address'),
            subject: 'ЗАПИСЬ НА КУРС',
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'emails.sign-up.notification',
        );
    }


    public function attachments(): array
    {
        return [];
    }
}
