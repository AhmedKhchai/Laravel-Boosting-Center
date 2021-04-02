<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;

    public $product;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $product)
    {
        //
        $this->product = $product;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contact-me')
            ->subject('More Information about ' . $this->product);
    }
}
// <!-- this file is not used -->
