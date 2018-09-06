<?php

require "vendor/autoload.php";

function main($params) {
    // var_dump($params); 
    $body_data = base64_decode($params['__ow_body']);

    $client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic(
        $params['apikey'],
        $params['apisecret']
    ));

	$response = $client->message()->send([
		'to' => $params['tonumber'],
		'from' => 'Email relay',
		'text' => $body_data
	]);
    echo "Message sent: $body_data\n";
}
