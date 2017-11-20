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
    require '../vendor/autoload.php';
    require_once('../modules/slimFramework.php');

    //END Libraries - - - - - - - - - - - - - - - - - - *



    //START Routing - - - - - - - - - - - - - - - - - - *
    //Location
    $app->get('/[{campus}/[{building}[/{floor}]]]', function ($request, $response, $args) {
        $data = array();
        if (isset($args['floor'])) {
            $target = "/views/floor.twig";
            array_push($data, 'floor', $args['floor']);
            array_push($data, 'building', $args['building']);
            array_push($data, 'campus', $args['campus']);
        } elseif (isset($args['building'])) {
            $target="/views/building.twig";
            array_push($data, 'building', $args['building']);
            array_push($data, 'campus', $args['campus']);
        } elseif (isset($args['campus'])){
            $target="/views/campus.twig";
            array_push($data, 'campus', $args['campus']);
        }else
            $target="/views/home.twig";

            return $this->view->render($response, $target, $data);
        }
    );
    //Account
    $app->get('/account', function ($request, $response, $args){
            return $this->view->render($response, "/views/home.twig");
        }
    );
    //Sign Up
    $app->get('/signUp', function ($request, $response, $args){
            return $this->view->render($response, "/views/signUp.twig");
        }
    );
    //Support
    $app->get('/support', function ($request, $response, $args){
            return $this->view->render($response, "/views/support.twig");
        }
    );
    //About Us
    $app->get('/about', function ($request, $response, $args){
            return $this->view->render($response, "/views/about.twig");
        }
    );
    //Administration
    $app->get('/admin', function ($request, $response, $args){
            return $this->view->render($response, "/views/admin.twig");
        }
    );
    //404 Error - Not Found
    $app->get('/404', function ($request, $response, $args){
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