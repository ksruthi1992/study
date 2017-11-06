<?php
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
            // Cache has been disabled
            'cache' => false
        ]);

        //Slim framework debugger which i dont know how to configure
        /*
        $twig = new Twig_Environment($loader, array(
            'debug' => true
        ));
        $twig->addExtension(new Twig_Extension_Debug());
        */

        $view->addExtension(
            new \Slim\Views\TwigExtension(
                $container->router,
                $container->request->getUri()
            )
        );
        return $view;
    };