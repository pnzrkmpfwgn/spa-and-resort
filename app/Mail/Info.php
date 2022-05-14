<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Booking;

class Info extends Mailable
{
    use Queueable, SerializesModels;
    public $order; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.Info.info');
    }
}
