<?php
    //Create app
    $app = new \Slim\App;

    //Get container
    $container = $app->getContainer();

    //Register component on container
    $container['view'] = function ($container) {
        $view = new \Slim\Views\Twig('../templates',[
            // Cache has been disabled
            'cache' => false,
            'debug' => true
        ]);

        // Instantiate and add Slim specific extension
        $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
        $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
        $view->addExtension(new Twig_Extension_Debug());
        
        return $view;
    };