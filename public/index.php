<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
//require '../src/config/db.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello Heroku!");
    return $response;
});

$app->get('/hello/{name}', function ($request, $response, array $args) {
    $response->getBody()->write("Saludos, " . $args['name']);
    return $response;
})->setName('hello');

$app->run();