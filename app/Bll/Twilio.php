<?php

namespace App\Bll;

use App\Modules\Api\Models\Settings;
use Twilio\Rest\Client;

class Twilio
{
    protected $client;

    protected $formNumber;
    public function __construct()
    {
        $cred = Settings::first();
        $this->formNumber = $cred->from_number;
        $this->client = new Client(
            $cred->sid,
            $cred->auth_token
        );
    }

    public  function sendVerificationCode($to, $code)
    {
        $this->client->messages->create(
            $to,
            [
                'from' => $this->formNumber,
                'body' => "Your verification code is: $code",
            ]
        );
    }
}
