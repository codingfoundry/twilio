<?php

namespace CodingFoundry\Twilio;

use Twilio\Rest\Client;

class Twilio {

    public $sid;
    public $token;

    function __construct()
    {
        $this->sid = env('TWILIO_ACCOUNT_SID');
        $this->token = env('TWILIO_AUTH_TOKEN');
    }

    public function carrier_lookup($phone)
    {
        $twilio = new Client($this->sid, $this->token);

        $phone_number = $twilio->lookups->v1->phoneNumbers($phone)
            ->fetch(array("type" => array("carrier")));

        return $phone_number->carrier;
    }

    public function send_sms()
    {

    }

}
