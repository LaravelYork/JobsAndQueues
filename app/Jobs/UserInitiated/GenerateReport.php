<?php

namespace App\Jobs\UserInitiated;

use App\Jobs\CoreJob;

use Illuminate\Support\Str;

class GenerateReport extends CoreJob {

    //tinker 
    //Bus::dispatch( (new App\Jobs\UserInitiated\GenerateReport() )->onQueue( config('queue.tubes.qos.user_initiated')) );
     
    public function handle(){

        dump(static::render());

     }

     protected static function render(){

        sleep(2);
        return bcrypt(Str::random(40));

     }

}