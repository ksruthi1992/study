<?php
    //START Header Settings - - - - - - - - - - - - - - - - - - *
    //Debugger
    require_once('../modules/debugger.php');

    //Session
    session_cache_limiter(false);
    if(!isset($_SESSION))
        session_start();

    //Database
    require_once('../modules/dataHandler.php');
    //END Header Settings - - - - - - - - - - - - - - - - - - *



    //START Libraries  - - - - - - - - - - - - - - - - - - *
    //Slim Framework
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    require '../vendor/autoload.php';
    require_once('../modules/slimFramework.php');

    //END Libraries - - - - - - - - - - - - - - - - - - *



    //START Routing - - - - - - - - - - - - - - - - - - *
    //Testing
    $app->get('/testing/{data1}', function (Request $request, Response $response, $args) use(&$campus){
            $campusSelected = $campus->showFloor(2,"all");
            $page = "/testing";
            $data1 = $request->getAttribute('data1');
            $data2 = 69;
            $data3 = $_SESSION['campus'];
            $data = ['page'=>$page, 'data1'=>$data1, 'data2'=>$data2,'data3'=>$data3,'campusSelected'=>$campusSelected];
            return $this->view->render($response, "views/testing.twig", $data);
        }
    );
    //Home
    $app->get('/', function (Request $request, Response $response, $args){
            return $this->view->render($response, "views/home.twig");
        }
    );
    //Campus Home
    $app->get('/{campus}/', function (Request $request, Response $response, $args){
            return $this->view->render($response, "views/home.twig");
        }
    );
    //Building
    $app->get('/{campus}/{building}', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/building.twig");
        }
    );
    //Floor
    $app->get('/{campus}/{building}/{floor}', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/floor.twig");
        }
    );
    //Account
    $app->get('/account', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/account.twig");
        }
    );
    //Sign Up
    $app->get('/signUp', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/signUp.twig");
        }
    );
    //Support
    $app->get('/support', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/support.twig");
        }
    );
    //About Us
    $app->get('/about', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/about.twig");
        }
    );
    //Administration
    $app->get('/admin', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/admin.twig");
        }
    );
    //404 Error - Not Found
    $app->get('/404', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/404.twig");
        }
    );

//END Routing - - - - - - - - - - - - - - - - - - *



//START Footer Settings - - - - - - - - - - - - - - - - - - *
    //Destroy Session
    session_destroy();

    //Run app
    $app->run();

//END Footer Settings - - - - - - - - - - - - - - - - - - *