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
    $app->get('/[{campus}/[{building}[/{floor}]]]', function ($request, $response, $args) use(&$campus){
            if (isset($args['floor'])) {
                //Floor
                $data['campus']=$args['campus'];
                $data['building']=$args['building'];
                $data['floor']=$args['floor'];

                $target = "/views/floor.twig";
            } elseif (isset($args['building'])) {
                //Building
                $data['campus']=$args['campus'];
                $data['building']=$args['building'];

                $target="/views/building.twig";
            } elseif (isset($args['campus'])){
                //Campus
                $data['campus']=$campusName=$args['campus'];

                //Store campus name into data to be sent
                $data['campusName']=$campusName;

                //Pull all campuses
                $campusesName=$campus->showCampus("all");
                $data['campusesName']=$campusesName;

                $target="/views/campus.twig";
            }else {
                //Homepage unless campus previously selected
                if(isset($_SESSION['campus'])){
                    //Redirect to campus by session
                    $data['campus']=$selectedCampus=$_SESSION['campus'];

                    //Pull selected campus
                    $campusName=$campus->showCampus($selectedCampus);
                    //Store campus name into data to be sent
                    $data['campusName']=$campusName[0]['name'];

                    //All campuses

                    $target="/views/campus.twig";
                }else{
                    //Homepage
                    //Auto-select CSUS id which is 1
                    $_SESSION['campus']=$selectedCampus=1;

                    //Pull selected campus
                    $campusName=$campus->showCampus($selectedCampus);
                    //Store campus name into data to be sent
                    $data['campusName']=$campusName[0]['name'];

                    //Pull all campuses
                    $campusesName=$campus->showCampus("all");
                    $data['campusesName']=$campusesName;

                    //Set target to home
                    $data['page']=$campusName[0]['name'];

                    //Defaults everything to Sac State
                    //This passes all of the buildings and the floors
                    $data['campus'] = $campus->showCampus("all");	  
                    $data['buildings'] =  $campus->showBuilding("1", "all");
                    foreach ( $data['buildings'] as $building) {
 
                        $data['floors'][$building['id']] = $campus->showFloor( $building['id'], "all" ); 
                     
                    }
                    
                    $target = "/views/home.twig";
                }
            }

            include("../modules/globalObjects.php");
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
