<?php

namespace App\Providers;

use App\Events\NewUserHasRegisterdEvent;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
    NewUserHasRegisterdEvent::class => [
        \App\Listeners\RegisteredToNewsletter::class,
        \App\Listeners\notifiyViaslack::class,
        \App\Listeners\WelcomeNewCustomerListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
