<?php
    require '../../vendor/autoload.php';
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    use Slim\Views;
    use Slim\Views\PhpRenderer;

    //app setup
    $app = new \Slim\App;
    $container = $app->getContainer();

    //Register component on container
    $container['view'] = function ($container) {
        $view = new \Slim\Views\Twig('../templates',[
            'cache' => false,
        ]);
        $view->addExtension(
            new \Slim\Views\TwigExtension(
                $container->router,
                $container->request->getUri()
            )
        );
        return $view;
    };

    //renders the index page of the site
    //made
    $app->get('/', function (Request $request, Response $response) {
            return $this->view->render($response, "index.phtml");
        }
    );
    //made
    $app->get('/buildings', function (Request $request, Response $response){
            return $this->renderer->render($response, "/views/buildings.phtml");
        }
    );
    //un-made
    $app->get('/status', function (Request $request, Response $response) {
            return $this->renderer->render($response, "/views/status.phtml");
        }
    );
    //un-made
    $app->get('/filter', function (Request $request, Response $response) {
            return $this->renderer->render($response, "/views/filter.phtml");
        }
    );
    //un-made   
    $app->get('/submit', function (Request $request, Response $response) {
            return $this->renderer->render($response, "/views/submit.phtml");
        }
    );

    //these are just example routes, but they are currently functional
    //_____________________________________________________________________
    $app->get('/hello/{name}', function (Request $request, Response $response) {
            $name = $request->getAttribute('name');
            $response->getBody()->write("Hello, $name");
            return $response;
        }
    );
    $app->get('/test', function (Request $request, Response $response) {
            $response->getBody()->write("I am testing");
            return $response;
        }
    );

    $app->run();

//removed '}', but not sure if needed. Also, " ? > " was added
?>