<?php

namespace App\Jobs\Serial;

use App\Jobs\CoreJob;

use Illuminate\Support\Str;

class PerformDataTransaction extends CoreJob {

    //tinker 
    //Bus::dispatch( (new App\Jobs\UserInitiated\GenerateReport() )->onQueue( config('queue.tubes.serialised')) );
     
    public function handle(){

        dump(static::render());

     }

     protected static function render(){

        sleep(2);
        return bcrypt(Str::random(40));

     }

}