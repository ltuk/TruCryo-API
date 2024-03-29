<?php
use GuzzleHttp\Client;

require __DIR__ . '/vendor/autoload.php';

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://prod-api.trucryo.com',
]);

$response = $client->request('GET', 'https://prod-api.trucryo.com/unlockCode', [
    'query' => ['serialNumber' => '0000', 'unlockTime' => '30 Mins', 'authcode' => '00000', 'token' => 'abcdefghijklmnopqrstuvwxyz']
]);

$body = $response->getBody();
echo $body;