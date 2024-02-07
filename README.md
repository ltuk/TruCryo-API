# TruCryo-API

Example code to demonstrate connecting to the TruCryo API to obtain an unlock code.

In this example we will be using [Guzzle](https://docs.guzzlephp.org/en/stable/). Guzzle is a PHP HTTP client that makes it easy to send HTTP requests and trivial to integrate with web services.

## Setup

To install Guzzle, we will be using [Composer](https://getcomposer.org/).

Once you have Composer installed, you can run the command:
```
composer require guzzlehttp/guzzle:^7.0
```


## Usage
You should always use Composer autoloader in your application to automatically load your dependencies. All the examples below assume you've already included this in your file:
```
use GuzzleHttp\Client;

require __DIR__ . '/vendor/autoload.php';
```

Here's how to send an unlock request:
Just replace the serialNumber, unlockTimeSelected, timeSelected, authcode and token with the correct values.
See table below for more information.
```
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://prod-api.trucryo.com',
]);

$response = $client->request('GET', 'https://prod-api.trucryo.com/unlockCode', [
    'query' => ['serialNumber' => '0000', 'unlockTime' => '30 Mins', 'authcode' => '00000', 'token' => 'abcdefghijklmnopqrstuvwxyz']
]);

$body = $response->getBody();
echo $body;
```

## Parameters

| Name | Description |
| ------------- |:-------------:|
| serialNumber  | Serial number of device     |
| unlockTime    | Unlock time duration. Available values: 30 Mins, 60 Mins, +3 Days, +5 Days, +7 Days, +1 Month, Unlock     |
| authcode | Auth code
token | API Auth Token