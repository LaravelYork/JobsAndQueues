<?php

namespace App\Jobs\Background;

use App\Jobs\CoreJob;

use Illuminate\Support\Str;

class ArchiveToStorage extends CoreJob {

    //tinker 
    //Bus::dispatch( (new App\Jobs\Background\ArchiveToStorage() )->onQueue( config('queue.tubes.qos.background')) );
     
    public function handle(){

        dump(static::copyToS3Glacier());

     }

     protected static function copyToS3Glacier(){

        sleep(1);
        return bcrypt(Str::random(40));

     }

}