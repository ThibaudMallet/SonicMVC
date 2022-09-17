<?php

require_once __DIR__ . './../vendor/autoload.php';

// require __DIR__.'/../app/controllers/MainController.php';

// Instanciation de Altorouteur
$router = new AltoRouter();
$router->setBasePath(($_SERVER['BASE_URI']));

$router->map(
    'GET',
    '/',
    [
        'action' => 'home',
        'controller' => '\Sonic\Controllers\MainController'
    ],
    'home'
);

$router->map(
    'GET',
    '/creator',
    [
        'action' => 'creator',
        'controller' => '\Sonic\Controllers\MainController'
    ],
    'creator'
);

$match = $router->match();

if ($match) {
    // On récupère la méthode et le controller qui correspond à la route
    $methodToUse = $match['target']['action'];
    $controllerToUse = $match['target']['controller'];
    // On instancie notre controller
    $controller = new $controllerToUse();
    // On execute la méthode définie dans la route
    $controller->$methodToUse($match['params']);
} else {
    // Si aucune route ne correspond à l'url
    exit('404 Not Found');
} 