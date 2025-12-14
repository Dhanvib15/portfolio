<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    /**
     * Create a new message instance.
     */
    public function __construct(array $contactData)
    {
        $this->contactData = $contactData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Form Submission - Portfolio Website',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // Ensure all values are strings and properly sanitized
        $name = isset($this->contactData['name']) ? (string) $this->contactData['name'] : '';
        $email = isset($this->contactData['email']) ? (string) $this->contactData['email'] : '';
        $phone = isset($this->contactData['phone']) && !empty($this->contactData['phone']) ? (string) $this->contactData['phone'] : 'Not provided';
        $service = isset($this->contactData['service']) && !empty($this->contactData['service']) ? (string) $this->contactData['service'] : 'Not specified';
        $timeline = isset($this->contactData['timeline']) && !empty($this->contactData['timeline']) ? (string) $this->contactData['timeline'] : 'Not specified';
        $contactMessage = isset($this->contactData['message']) ? (string) $this->contactData['message'] : '';

        return new Content(
            view: 'emails.contact',
            with: [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'service' => $service,
                'timeline' => $timeline,
                'contactMessage' => $contactMessage,
            ],
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
