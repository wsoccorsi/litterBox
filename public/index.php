<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// autoload files
require '../vendor/autoload.php';

// configure Slim application instance
// initialize application
$app = new \Slim\App();

// initialize dependency injection container
$container = $app->getContainer();

// configure processor in DI container
$container['processor'] = function ($container) {
  return new \App\Processor\MyProcessor();
};

// "hello world" controller
$app->get('/hello[/{name}]', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    if ($name) {
      $processedName = $this->processor->process($name);
      $response->getBody()->write("Aloha, $processedName!");
    } else {
      $response->getBody()->write("Sorry, we haven't been introduced yet.");    
    }
    return $response;
});

$app->get('/info', function (Request $request, Response $response) {
  phpinfo(); die;
});

$app->run();
