<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteFinalized extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $quote, $files;

    public function __construct($quote)
    {
        
        $this->quote = $quote;
        $filePath = asset('uploads/'.$this->quote->inv_file);
        $this->files = [
            'file_path' => $filePath,
            'file_name' => $this->quote->user->fname.''.$this->quote->user->lname.'-'.$this->quote->service_type.' Invoice',
            'file_mime' => 'application/pdf',
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.quote-final') 
        ->attach($this->files['file_path'], [
                    'as' => $this->files['file_name'],
                    'mime' => $this->files['file_mime'],
            ]);
    }
}
