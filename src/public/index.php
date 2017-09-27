<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\PhpRenderer;

require '../../vendor/autoload.php';

//app setup
$app = new \Slim\App;
$container = $app->getContainer();

//set the path for finding the templates
$container['renderer'] = new PhpRenderer("../templates");

//renders the index page of the site
$app->get('/', function (Request $request, Response $response) {
    return $this->renderer->render($response, "index.phtml");
});

$app->get('/buildings', function (Request $request, Response $response){
    return $this->renderer->render($response, "/views/buildings.phtml");
});

$app->get('/status', function (Request $request, Response $response) {
    return $this->renderer->render($response, "/views/status.phtml");
});


$app->get('/filter', function (Request $request, Response $response) {
    return $this->renderer->render($response, "/views/filter.phtml");
});

$app->get('/submit', function (Request $request, Response $response) {
    return $this->renderer->render($response, "/views/submit.phtml");
});



//these are just example routes, but they are currently functional
//_____________________________________________________________________
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

$app->get('/test', function (Request $request, Response $response) {
    $response->getBody()->write("I am testing");

    return $response;
});


$app->run();