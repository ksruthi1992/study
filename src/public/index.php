<?php
require '../../vendor/autoload.php';
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];


//app setup
$app = new \Slim\App($configuration);

$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../templates', [
        'cache' => '../cache',
        'auto_reload' => true,
    ]);
    
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

//set the path for finding the templates
//$container['renderer'] = new PhpRenderer("../templates");

//renders the index page of the site
$app->get('/', function (Request $request, Response $response) {
    return $this->view->render($response, "index.phtml");
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