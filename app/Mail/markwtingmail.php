<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class markwtingmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $templateData, $subjectData, $username;

    public function __construct($templateData, $username, $subjectData)
    {
        $this->username = $username;
        $this->templateData = $templateData;
        $this->subjectData = $subjectData;

    }
    public function build()
    {
        return $this->view('emails.marketing')->with([
            'templateData' => $this->templateData,
            'userName' => $this->username,
        ]);
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subjectData['subject'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     if($this->subjectData['attachment'] != " ")
    //     {
    //     return [
    //         Attachment::fromPath( Public_path( $this->subjectData['attachment']))
    //         ->as('Muhammad_Awais.pdf')
    //         ->withMime('application/pdf'),
    //     ];
    // }
    // else{
    //     return[
    //         //
    //         dd($this->subjectData['attachment'])
    //     ];
    // }
    // }
}
