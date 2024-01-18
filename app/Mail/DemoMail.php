<?php

namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use App\models\Email;



class DemoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
        /**
     * Create a new message instance.
     */
	
	public function __construct($data)
	{
        $this->data = $data;

	
	}
 
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
        
           from: new Address($this->data['guradianEmail'], $this->data['guardianName']),
           subject: $this->data['message'] . ' - Contact Us',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
      
            markdown: 'emails.test20',
            with:[
                $this->data,
            ]
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
