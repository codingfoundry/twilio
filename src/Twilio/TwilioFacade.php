<?php
namespace CodingFoundry\Twilio;

use Illuminate\Support\Facades\Facade;

class TwilioFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Twilio';
    }
}
