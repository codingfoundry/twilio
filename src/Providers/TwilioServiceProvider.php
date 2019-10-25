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
        $variables = [
            'TWILIO_ACCOUNT_SID' => '',
            'TWILIO_AUTH_TOKEN' => '',
            'TWILIO_PHONE_NUMBER' => '',
        ];
        foreach ($variables as $key => $value) {
            putenv("$key=$value");
        }

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
