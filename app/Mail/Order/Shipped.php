<?php

namespace App\Mail\Order;

use App\Mail\CoreMailable;

class Shipped extends CoreMailable
{

    //tinker
    // Mail::to('testemail@testemailmessage.com')->send(new App\Mail\Order\Shipped());

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.order.shipped');
    }
}
