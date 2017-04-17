<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 3/8/17
 * Time: 4:08 PM
 */

// Add the validation dependency
$container['validator'] = function ($container) {
    return new App\Validation\Validator();
};

$container['cache'] = function ($container) {
//    return new \App\Middleware\HttpCache\CacheProvider();             // Slim HttpCache
    return new \Slim\HttpCache\CacheProvider();
};

// Override notFoundHandler (404):
$container['notFoundHandler'] = function ($container) {
    return new App\Handlers\NotFoundHandler($container['view']);
};

// Override notAllowedHandler (405):
$container['notAllowedHandler'] = function ($container) {
    return new App\Handlers\notAllowedHanlder($container['view']);
};

// Override phpErrorHandler (500):
$container['phpErrorHandler'] = function ($container) {
    return new App\Handlers\phpErrorHandler($container['view']);
};

// Add the Controllers:
$container['HomeController'] = function ($container) {
    return new \App\Controllers\HomeController($container);
};

$container['AuthController'] = function ($container) {
    return new \App\Controllers\Auth\AuthController($container);
};

$container['PasswordController'] = function ($container) {
    return new \App\Controllers\Auth\PasswordController($container);
};

$container['HRController'] = function ($container) {
    return new \App\Controllers\HRController($container);
};

$container['OperationsController'] = function ($container) {
    return new \App\Controllers\OperationsController($container);
};

$container['AccountsController'] = function ($container) {
    return new \App\Controllers\AccountsController($container);
};

$container['AJAXController'] = function ($container) {
    return new \App\Controllers\AJAXController($container);
};

$container['ProjectsController'] = function ($container) {
    return new \App\Controllers\ProjectsController($container);
};

$container['Factory'] = function ($container) {
    return new \App\Controllers\Factory($container);
};
