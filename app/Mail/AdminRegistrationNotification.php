<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminRegistrationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public string $userEmail;
    public string $acceptUrl;
    public string $rejectUrl;
    public string $blockUrl;

    public function __construct(string $userEmail, string $token)
    {
        $this->userEmail = $userEmail;
        $baseUrl = config('app.url');
        $this->acceptUrl = "{$baseUrl}/verify?action=accept&token={$token}";
        $this->rejectUrl = "{$baseUrl}/verify?action=reject&token={$token}";
        $this->blockUrl = "{$baseUrl}/verify?action=block&token={$token}";
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Access Request: {$this->userEmail}",
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.admin-notification',
        );
    }
}
