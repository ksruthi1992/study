<?php
    use Slim\Views;
    use Slim\Views\PhpRenderer;

    //Create app
    $app = new \Slim\App;

    //Get container
    $container = $app->getContainer();

    //Register component on container
    $container['view'] = function ($container) {
        $view = new \Slim\Views\Twig('../templates',[
            // Cache has been disabled
            'cache' => false
        ]);

        $view->addExtension(
            new \Slim\Views\TwigExtension(
                $container->router,
                $container->request->getUri()
            )
        );

        return $view;
    };