<?php

use App\Http\RequestFactory;
use App\Http\Response;

chdir(dirname(__DIR__));

require 'vendor/autoload.php';

# init app

$request = RequestFactory::fromGlobals();

# action

$userName = $request->getQueryParams()['name'] ?? 'Guest';

$response = (new Response('Hello, ' . $userName . ' from B-framework'))
    ->withHeader('B-framework', 'v-1');

# sending

header('HTTP/1.0' . $response->getStatusCode() . '' . $response->getReasonPhrase());
foreach ($response->getHeaders() as $name => $value) {
    header($name . ':' . $value);
}
echo $response->getBody();


