<?php

namespace App\Mail;

use App\Models\Company;
use App\Models\Driver;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DriverApplicationForm extends Mailable
{
    use Queueable, SerializesModels;

    public Driver $driver;
    public Company $company;
    public array $location;
    public string $cleHDate;
    public string $signatureUrl;
    public string $pdfPath;

    public function __construct(
        Driver $driver,
        Company $company,
        array $location,
        string $cleHDate,
        string $signatureUrl,
        string $pdfPath
    ) {
        $this->driver = $driver;
        $this->company = $company;
        $this->location = $location;
        $this->cleHDate = $cleHDate;
        $this->signatureUrl = $signatureUrl;
        $this->pdfPath = $pdfPath;
    }

    public function envelope(): Envelope
    {
        $driverName = trim(
            ($this->driver->fname ?? '') . ' ' .
            ($this->driver->mname ?? '') . ' ' .
            ($this->driver->lname ?? '')
        );

        return new Envelope(
            subject: 'Hi ' . $driverName . ', Application completed successfully',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.driver-esign-response',
            with: [
                'driver' => $this->driver,
                'company' => $this->company,
            ]
        );
    }

    /**
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        $licenseNo = $this->driver->currentcdllicenseno ?? 'Unknown';
        return [
            Attachment::fromPath($this->pdfPath)
                ->as('Driver-Application-' . $licenseNo . '.pdf')
                ->withMime('application/pdf'),
        ];
    }
}