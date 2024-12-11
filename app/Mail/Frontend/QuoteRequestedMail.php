<?php

namespace App\Mail\Frontend;

use App\DataObject\QuoteMessageDataObject;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuoteRequestedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public QuoteMessageDataObject $dataObject
    )
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Quote Requested',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.frontend.quote-requested',
            with: ['dataObject'=>$this->dataObject]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
