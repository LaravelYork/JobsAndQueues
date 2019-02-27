<?php

namespace App\Mail;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\SendQueuedMailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Queue\Factory as Queue;

class CoreMailable extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }


    public function onQueue($queue)
    {   

        dump('onQueue');

        if($queue == config('queue.connections.redis.queue')){
            $this->queue = config('queue.tubes.qos.utility');
        }

        return $this;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        throw new Exception('Please override the build function');
    }
}
