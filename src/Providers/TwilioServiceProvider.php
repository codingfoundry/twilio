<?php

namespace CodingFoundry\Twilio;

use Illuminate\Support\ServiceProvider;
use CodingFoundry\Twilio\Twilio;

class TwilioServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Twilio', function() {
            return new Twilio();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
