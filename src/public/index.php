<?php
    require '../../vendor/autoload.php';
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    use Slim\Views;
    use Slim\Views\PhpRenderer;

    //App setup
        //Create Slim app
    $app = new \Slim\App;
        //Fetch DI container
    $container = $app->getContainer();


    //Register component on container
        //Register Twig View Helper
    $container['view'] = function ($container) {
        $view = new \Slim\Views\Twig('../templates',[
            'cache' => false,
        ]);
        // Cache has been disabled

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
        //Define named routes
    $app->get('/', function (Request $request, Response $response, $args) {
            return $this->view->render($response, "index.phtml");
        }
    );

        //Render from string
    //Is also possible

    //made
    $app->get('/buildings', function (Request $request, Response $response){
            return $this->view->render($response, "views/building.phtml");
        }
    );
    //un-made
    $app->get('/status', function (Request $request, Response $response) {
            return $this->renderer->render($response, "views/status.phtml");
        }
    );
    //made
    $app->get('/filter', function (Request $request, Response $response) {
            $response->getBody()->write("This is the filter");
            return $response;
        }
    );
    //made 
    $app->get('/support', function (Request $request, Response $response) {
            $response->getBody()->write("This is the support section");
            return $response;
        }
    );
    //un-made   
    $app->get('/submit', function (Request $request, Response $response) {
            return $this->renderer->render($response, "views/submit.phtml");
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

    //these are made for testing purposes
    require_once('../app/api/counter.php');
    require_once('../modules/connect.php');

    //Run app
    $app->run();

//removed '}', but not sure if needed
