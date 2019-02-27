<?php

namespace App\Jobs\UserInitiated;

use App\Jobs\CoreJob;

use Illuminate\Support\Str;

class GeneratePdf extends CoreJob {

    //tinker 
    //Bus::dispatch( (new App\Jobs\UserInitiated\GeneratePdf() )->onQueue( config('queue.tubes.prioritised.urgent')) );
     
    public function handle(){

        dump(static::render());

     }

     protected static function render(){

        sleep(2);
        return bcrypt(Str::random(40));

     }

}