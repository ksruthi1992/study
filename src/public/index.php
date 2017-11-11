<?php
    //Debugger
    require_once('../modules/debugger.php');

    session_cache_limiter(false);
    if(!isset($_SESSION))
        session_start();

    require '../../vendor/autoload.php';

    //Slim Framework
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    require_once('../modules/slimFramework.php');

    //Modules
    //Connect to the database
    require_once('../modules/connection.php');
    //Fetch data from the database
    require_once('../modules/campusData.php');
    require_once('../modules/dataHandler.php');

    //Routes definition
    //Testing
    $app->get('/testing/{data1}', function (Request $request, Response $response, $args) use(&$campus){
            $campusSelected = $campus->showFloor(2,"all");
            $page = "/testing";
            $data1 = $request->getAttribute('data1');
            $data2 = 69;
            $data3 = $_SESSION['campus'];
            $data = ['page'=>$page, 'data1'=>$data1, 'data2'=>$data2,'data3'=>$data3,'campusSelected'=>$campusSelected];
            return $this->view->render($response, "testing.phtml", $data);
        }
    );

    //Home
    $app->get('/', function (Request $request, Response $response, $args){
            return $this->view->render($response, "home.phtml");
        }
    );
    //Campus Home
    $app->get('/{campus}/', function (Request $request, Response $response, $args){
            return $this->view->render($response, "home.phtml");
        }
    );
    //Building
    $app->get('/{campus}/{building}', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/building.phtml");
        }
    );
    //Floor
    $app->get('/{campus}/{building}/{floor}', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/floor.phtml");
        }
    );
    //Account
    $app->get('/account', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/account.phtml");
        }
    );
    //SignUp
    $app->get('/signUp', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/signUp.phtml");
        }
    );
    //Support
    $app->get('/support', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/support.phtml");
        }
    );
    //About Us
    $app->get('/aboutUs', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/aboutUs.phtml");
        }
    );
    //Administration
    $app->get('/administration', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/administration.phtml");
        }
    );
    //404 Not Found
    $app->get('/404', function (Request $request, Response $response, $args){
            return $this->view->render($response, "/views/404.phtml");
        }
    );
    
    //Destroy Session
    session_destroy();

    //Run app
    $app->run();