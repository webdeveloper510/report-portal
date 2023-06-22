<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BulkEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $reportData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $reportData)
    {
        //
         $this->reportData = $reportData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
      public function build()
    {
          return $this->view('admin.email')
                    ->subject('Your Email Subject')
                    ->from('test@gmail.com', 'Amit')
                    ->with(['reportData' => $this->reportData]);
    }
}
