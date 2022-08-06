<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TransferSuccess extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $eData = [
            'name' => $this->data->name,
            'from_user' => $this->data->from_name,
            'amount' => $this->data->amount,
        ];
        return $this->view('emails.transfer_success', $eData)->subject($this->data->subject);
    }
}
