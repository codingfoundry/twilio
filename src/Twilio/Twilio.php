<?php

namespace CodingFoundry\Twilio;

use Twilio\Rest\Client;

class Twilio {

    public $sid;
    public $token;
    public $phone;

    function __construct()
    {
        $this->sid = env('TWILIO_ACCOUNT_SID');
        $this->token = env('TWILIO_AUTH_TOKEN');
        $this->phone = env('TWILIO_PHONE_NUMBER');
    }

    public function carrier_lookup($number)
    {
        $twilio = new Twilio();
        $twilio = new Client($twilio->sid, $twilio->token);

        $phone_number = $twilio->lookups->v1->phoneNumbers($number)
            ->fetch(array("type" => array("carrier")));

        return $phone_number->carrier;
    }

    public function send_sms($number, $message)
    {
        $twilio = new Twilio();
        $twilio = new Client($twilio->sid, $twilio->token);

        $twilio->messages->create(
            $number,
            [
                'from' => $twilio->phone,
                'body' => $message
            ]
        );
    }

}
