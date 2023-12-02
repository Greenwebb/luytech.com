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
    public $quote, $file, $path;

    public function __construct($quote)
    {
        
        $this->quote = $quote;
        $this->path = url('public/storage/uploads/'.$this->quote->inv_file);
        $filePath = url('public/storage/uploads/'.$this->quote->inv_file);

        
        $this->file = [
            'file_path' => $filePath,
            'file_name' => $this->quote->user->fname . ' ' . $this->quote->user->lname . '-' . $this->quote->service_type . ' Invoice',
            'file_mime' => $this->getMimeType($filePath),
        ];
    }

    

    public function getMimeType($filePath)
    {
        $mimeTypes = [
            'pdf'  => 'application/pdf',
            'doc'  => 'application/msword',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'xls'  => 'application/vnd.ms-excel',
        ];
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        return isset($mimeTypes[$extension]) ? $mimeTypes[$extension] : 'application/octet-stream';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        try {
            // dd($this->quote);
            return $this->view('emails.quote-final');
            // ->attach($this->file['file_path'], [
            //             'as' => $this->file['file_name'],
            //             'mime' => $this->file['file_mime'],
            //     ]);
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
