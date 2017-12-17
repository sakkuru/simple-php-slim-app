<?php
require __DIR__ . '/vendor/autoload.php';
$app = new \Slim\App;

$app->get('/', function ($request, $response) {
    echo "This is simple php app.";
});

$app->get('/{name}', function ($request, $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name.");
    return $response;
});
$app->run();
