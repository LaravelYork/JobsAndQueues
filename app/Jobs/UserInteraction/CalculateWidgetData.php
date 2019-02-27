<?php

namespace App\Jobs\UserInteraction;

use App\Jobs\CoreJob;

use Illuminate\Support\Str;

class CalculateWidgetData extends CoreJob {

    //tinker 
    //Bus::dispatch( (new App\Jobs\UserInteraction\CalculateWidgetData() )->onQueue( config('queue.tubes.qos.user_interactive')) );
     
    public function handle(){

        dump(static::slowCalculation());

     }

     protected static function slowCalculation(){

        sleep(1);
        return bcrypt(Str::random(40));

     }

}