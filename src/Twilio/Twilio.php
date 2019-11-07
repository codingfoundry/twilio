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

    public static function carrier_lookup($number)
    {
        $twilio = new Twilio();
        $twilio = new Client($twilio->sid, $twilio->token);

        $phone_number = $twilio->lookups->v1->phoneNumbers($number)
            ->fetch(array("type" => array("carrier")));

        return $phone_number->carrier;
    }

    public static function send_sms($number, $message)
    {
        $twilio = new Twilio();
        $client = new Client($twilio->sid, $twilio->token);

        $client->messages->create(
            $number,
            array(
                'from' => $twilio->phone,
                'body' => $message
            )
        );

        return [
            'from' => $twilio->phone,
            'body' => $message
        ];
    }

    /*
     * $url TwiML Bin URL
     */
    public static function send_voice($number, $url)
    {
        $twilio = new Twilio();
        $client = new Client($twilio->sid, $twilio->token);

        $client->calls->create(
            $number,
            $twilio->phone,
            array(
                'url' => $url,
            )
        );

        return "voice sent";
    }
}
