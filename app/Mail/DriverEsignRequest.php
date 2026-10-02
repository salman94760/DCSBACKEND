<?php

namespace App\Mail;

use App\Models\Driver;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DriverEsignRequest extends Mailable
{
    use Queueable, SerializesModels;

    public Driver $driver;
    public string $esignUrl;
    public int $expiryHours;
    public string $companyName;
    public string $companyEmail;

    /**
     * Create a new message instance.
     */
    public function __construct(
        Driver $driver,
        string $esignUrl,
        int $expiryHours,
        string $companyName,
        string $companyEmail
    ) {
        $this->driver = $driver;
        $this->esignUrl = $esignUrl;
        $this->expiryHours = $expiryHours;
        $this->companyName = $companyName;
        $this->companyEmail = $companyEmail;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Action Required: Complete Your E-Signature',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.driver-esign-request',
            with: ['driver'=> $this->driver]
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}