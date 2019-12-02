<?php

namespace App\Listeners;

use App\Events\NewUserHasRegisterdEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RegisteredToNewsletter
{
   
    public function handle(NewUserHasRegisterdEvent $event)
    {
        dump('Register to newsletter');
    }
}
