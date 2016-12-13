<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;

require 'vendor/autoload.php';

$app = new Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

$container = $app->getContainer();

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/resources/views', [
        'cache' => false,
    ]);
    
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

$container['db'] = function () {
    $db = new PDO('mysql:host=localhost;dbname=project', 'root', 'root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
};

$app->get('/', HomeController::class . ':index');

$app->group('/users', function () {
    $this->get('', UserController::class . ':index');
    $this->get('/{id}', UserController::class . ':show');
    $this->post('', UserController::class . ':store');
    $this->map(['PUT', 'PATCH'], '/{id}', UserController::class . ':update');
    $this->delete('/{id}', UserController::class . ':destroy');
});

$app->run();
