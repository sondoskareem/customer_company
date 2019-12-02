<?php

namespace App\Providers;

use App\Providers\App\Listeners\NewUserHasRegisterdEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WelcomeNewCustomerListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUserHasRegisterdEvent  $event
     * @return void
     */
    public function handle(NewUserHasRegisterdEvent $event)
    {
        //
    }
}
