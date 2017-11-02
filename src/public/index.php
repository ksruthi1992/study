<?php
    //Debugger
    require_once('../modules/debugger.php');
    require '../../vendor/autoload.php';

    //Slim Framework
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;
    require_once('../modules/slimFramework.php');

    //Modules
    //Connect to the database
    require_once('../modules/connect.php');
    //Fetch data from the database
    require_once('../modules/getSelection.php');
    require_once('../modules/getCampuses.php');
    require_once('../modules/getFeatures.php');
    require_once('../modules/getBuildings.php');
    require_once('../modules/getFloors.php');

    //Routes definitions

    //Home
    $app->get('/', function (Request $request, Response $response, $args) use(&$page, &$campusSelected, &$campuses, &$buildings, &$floors) {
            $data = ['page'=>$page, 'campusSelected'=>$campusSelected, 'campuses'=>$campuses, 'buildings'=>$buildings, 'floors'=>$floors];
            return $this->view->render($response, "index.phtml", $data);
        }
    );
    //Building
    $app->get('/building', function (Request $request, Response $response, $args) use(&$page, &$campusSelected, &$campuses) {
            $data = ['page'=>$page, 'campusSelected'=>$campusSelected,'campuses'=>$campuses];
            return $this->view->render($response, "/views/building.phtml", $data);
        }
    );
    //Floor
    $app->get('/floor', function (Request $request, Response $response, $args) use(&$page, &$campusSelected, &$campuses) {
            $data = ['page'=>$page, 'campusSelected'=>$campusSelected, 'campuses'=>$campuses];
            return $this->view->render($response, "/views/floor.phtml", $data);
        }
    );
    //Account
    $app->get('/account', function (Request $request, Response $response, $args) use(&$page, &$campusSelected, &$campuses) {
            $data = ['page'=>$page, 'campusSelected'=>$campusSelected, 'campuses'=>$campuses];
            return $this->view->render($response, "/views/account.phtml", $data);
        }
    );
    //SignUp
    $app->get('/signUp', function (Request $request, Response $response, $args) use(&$page, &$campusSelected, &$campuses) {
            $data = ['page'=>$page, 'campusSelected'=>$campusSelected, 'campuses'=>$campuses];
            return $this->view->render($response, "/views/signUp.phtml", $data);
        }
    );
    //Support
    $app->get('/support', function (Request $request, Response $response) use(&$page, &$campusSelected){
            $response->getBody()->write("This is the Support section");
            return $response;
        }
    );


    //Example
    //This is just an example route, but it is currently functional
    $app->get('/hello/{name}', function (Request $request, Response $response) {
            $name = $request->getAttribute('name');
            $response->getBody()->write("Hello, $name");
            return $response;
        }
    );

    //Run app
    $app->run();