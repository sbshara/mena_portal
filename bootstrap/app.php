<?php
/**
 * Created by PhpStorm.
 * User: Shiblie
 * Date: 11/3/16
 * Time: 12:38 AM
 */

use Respect\Validation\Validator as v;
use Slim\App as Slim;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Noodlehaus\Config;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Slim\Flash\Messages;
use Slim\Csrf\Guard;

session_cache_limiter(false);
session_start();
defined('INC_ROOT') ? null : define('INC_ROOT', dirname(__DIR__));
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
require INC_ROOT . DS . 'vendor' . DS . 'autoload.php';

$settings = require INC_ROOT . DS . 'app' . DS . 'config' . DS . 'settings.php';


$app = new Slim($settings);


$container = $app->getContainer();

$container['config'] = function ($container) { return new Config(INC_ROOT.DS.'app'.DS.'config'.DS.'settings.php'); };
$capsule = new Capsule;
    $capsule->addConnection($container->config->get('db'));
    $capsule->setEventDispatcher(new Dispatcher(new Container));
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

// Add the database connector capsule
$container['db'] = function ($container) use ($capsule) { return $capsule; };

// Add the authorization dependency
$container['auth'] = function ($container) { return new \App\Helpers\Auth(); };
$container['HR'] = function ($container) { return new \App\Helpers\HR(); };
$container['OPS'] = function ($container) { return new \App\Helpers\OPS(); };


$container['flash'] = function ($container) {  return new Messages(); }; // Add global message flash dependency

$container['view'] = function ($container) {            // Add the Twig View dependency
	$view = new Twig(
        $container->config->get('view.template'), [
            'cache' =>  $container->config->get('view.cache'),
            'debug' =>  $container->config->get('view.debug')
    ]);
	$view->addExtension ( new TwigExtension ($container->router, $container->request->getUri() ) );
    require 'globals.php';
	return $view;
};

<<<<<<< HEAD
require 'dependencies.php';
=======
// Add the validation dependency
$container['validator'] = function ($container) {
	return new App\Validation\Validator();
};

$container['cache'] = function ($container) {
	return new \App\Middleware\HttpCache\CacheProvider();
};

// Override notFoundHandler:
$container['notFoundHandler'] = function ($container) {
    return new App\Handlers\NotFoundHandler($container['view']);
};


// Add the Controllers:
$container['HomeController'] = function ($container) { return new \App\Controllers\HomeController($container); };
>>>>>>> origin/master

$container['csrf'] = function ($container) { return new Guard(); };

$app->add(new \App\Middleware\ValidationErrorsMiddleware($container));
$app->add(new \App\Middleware\OldInputMiddleware($container));
$app->add(new \App\Middleware\CsrfViewMiddleware($container));
$app->add($container->csrf);

$app->add(new \Slim\HttpCache\Cache(
    $container->config->get('view.cacheavail'),
    $container->config->get('view.cachetime')
));

v::with('App\\Validation\\Rules\\');

require INC_ROOT.DS.'app'.DS.'Routes'.DS.'web.php';
require INC_ROOT.DS.'app'.DS.'Routes'.DS.'api.php';
