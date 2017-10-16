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
            'cache' => false
        ]);
        // Cache has been disabled

        //debugger which i dont know how to configure
        //$twig = new Twig_Environment($loader, array(
        //    'debug' => true
        //));
        //$twig->addExtension(new Twig_Extension_Debug());
        // debugger end


        $view->addExtension(
            new \Slim\Views\TwigExtension(
                $container->router,
                $container->request->getUri()
            )
        );

        return $view;
    };

        //MODULES
    //Connection to the database
    require_once('../modules/connect.php');
    //Fetch places from database
    require_once('../modules/getCampuses.php');
    require_once('../modules/getBuildings.php');

    //ROUTES defined
        //Home section
    $app->get('/', function (Request $request, Response $response, $args) use(&$campuses, &$buildings) {
            $data = ['campuses'=>$campuses, 'buildings'=>$buildings];
            return $this->view->render($response, "index.phtml", $data);
        }
    );

        //Account section
    $app->get('/account', function (Request $request, Response $response, $args) use(&$campuses) {
            $data = ['campuses'=>$campuses];
            return $this->view->render($response, "/views/account.phtml", $data);
        }
    );

        // EXAMPLES start
    //these are just example routes, but they are currently functional
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
        // EXAMPLES end

        //ALPHA start
    //Building
    $app->get('/building', function (Request $request, Response $response){
            return $this->view->render($response, "views/building.phtml");
        }
    );
    //Support Section
    $app->get('/support', function (Request $request, Response $response) {
            $response->getBody()->write("This is the Support section");
            return $response;
        }
    );
    require_once('../app/api/counter.php');
    //ALPHA end

    //Run app
    $app->run();

//removed '}', but not sure if needed