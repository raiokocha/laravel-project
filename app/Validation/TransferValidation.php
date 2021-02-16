<?php

namespace App\Validation;

use GuzzleHttp\Client;

class TransferValidation
{

    public static function externalAuthorizer($method, $requestUrl)
    {
        $client = new Client([]);
        $response = $client->request($method, $requestUrl);
        return json_decode($response->getBody()->getContents());
    }

}



