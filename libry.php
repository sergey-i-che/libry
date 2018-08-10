<?php

require_once('vendor/autoload.php');

$baseUrl = 'http://rosreestr.ru/api/online/';
//$baseUrl = 'http://5b6da56fd8f3430014e79708.mockapi.io/';

$client = new GuzzleHttp\Client(['base_uri' => $baseUrl]);

// $url = 'items';

$url ='address/fir_objects';

$headers = [
    'User-Agent' => 'testing/1.0',
    'Content-type' => 'text/json',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
    'Accept-Encoding: gzip, deflate',
    'Accept-Language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7',
    'Cache-Control: no-cache',
    'Connection: keep-alive',
    //'X-Foo'      => ['Bar', 'Baz']
];

$options = [
    'headers' => $headers,
//    'form_params' => [
//        'regionId'=> '39200000002700',
//        'streetType' => 'str1'
//    ]
];

$response = $client->request('POST', $url, $options);


echo $response->getBody();