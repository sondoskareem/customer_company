<?php

namespace App\Listeners;

use App\Events\NewUserHasRegisterdEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class notifiyViaslack
{
 
    public function handle(NewUserHasRegisterdEvent $event)
    {
        dump('stack message here');

    }
}
