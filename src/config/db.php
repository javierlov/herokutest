<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use Slim\Factory\AppFactory;


$app = new \Slim\App;

$app->get('/api/usuarios',  function (Request $request, Response $response) {
  
    echo "usuarios";
});