<?php

namespace App\Listeners;
use Illuminate\Support\Facades\Mail;
use App\Mail\WellcomeNewUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WelcomeNewCustomerListener implements ShouldQueue
{
   
    public function handle($event)
    {
        sleep(5);
        Mail::to($event->customer->email)->send(new WellcomeNewUserMail());

    }
}
