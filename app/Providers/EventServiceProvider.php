<?php

namespace App\Providers;

use App\Events\TestStripePayment;
use App\Listeners\PaymentFailed;
use App\Listeners\PaymentProcessing;
use App\Listeners\PaymentSucceeded;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        'stripe-webhooks::payment_intent.succeeded' => [
            PaymentSucceeded::class
        ],

        'stripe-webhooks::payment_intent.payment_failed' => [
            PaymentFailed::class
        ],

        'stripe-webhooks::payment_intent.processing' => [
            PaymentProcessing::class
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
