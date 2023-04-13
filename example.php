<?php
use GuzzleHttp\Client;

require __DIR__ . '/vendor/autoload.php';

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://prod-api.trucryo.com',
]);

$response = $client->request('GET', 'https://prod-api.trucryo.com/unlockCode', [
    'query' => ['serialNumber' => '0000', 'unlockTimeSelected' => '30', 'timeSelected' => '0', 'authcode' => '00000', 'token' => 'abcdefghijklmnopqrstuvwxyz']
]);

$body = $response->getBody();
echo $body;