<?php
/**
 * Created by PhpStorm.
 * User: Shiblie
 * Date: 11/3/16
 * Time: 12:38 AM
 */

use Respect\Validation\Validator as v;
//use \DI\Bridge\Slim\App as Slim;
use \Slim\App as Slim;
use \Illuminate\Database\Capsule\Manager as Capsule;
// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

session_cache_limiter(false);
session_start();

defined('INC_ROOT') ? null : define('INC_ROOT', dirname(__DIR__));
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

require INC_ROOT . DS . 'vendor/autoload.php';

$settings = require __DIR__ . '/../app/config/settings.php';

$app = new Slim($settings);

$container = $app->getContainer();

$capsule = new Capsule;
$capsule->addConnection($container->db);
$capsule->setEventDispatcher(new Dispatcher(new Container));
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Add the database connector capsule
$container['db'] = function ($container) use ($capsule) {
	return $capsule;
};

// Add the authorization dependency
$container['auth'] = function ($container) {
	return new \App\Helpers\Auth();
};

$container['HR'] = function ($container) {
    return new \App\Helpers\HR();
};

// Add global message flash dependency
$container['flash'] = function ($container) {
	return new \Slim\Flash\Messages();
};

// Add the Twig View dependency
$container['view'] = function ($container) {
	$view = new \Slim\Views\Twig(
        __DIR__ . '/../resources/views/', [
            'cache' =>  __DIR__ . '/../cache',
//            'cache' =>  false,
            'debug' =>  true
	    ]
    );

	$view->addExtension (
        new \Slim\Views\TwigExtension (
		    $container->router,
		    $container->request->getUri()
	    )
    );

	// Globalize the Auth module to access it within template partials
	$view->getEnvironment()->addGlobal('auth', [
		'check'         	=>  $container->auth->check(),
		'user'          	=>  $container->auth->user(),
		'profile'       	=>  $container->auth->profile(),
		'userMaster'        =>  $container->auth->userMaster()
	]);

	$view->getEnvironment()->addGlobal('HR', [
		'countries'			=>	$container->HR->allCountries(),
		'states'            =>  $container->HR->allStates(),
        'cities'			=>  $container->HR->allCities(),
        'applicants'        =>  $container->HR->allApplicants(),
        'languages'         =>  $container->HR->allLanguages(),
        'departments'       =>  $container->HR->allDepartments(),
        'departmentHeads'   =>  $container->HR->allDepartmentHeads(),
        'employees'         =>  $container->HR->allEmployees(),
        'titles'            =>  $container->HR->allTitles()
	]);

	// Add the flash message
	$view->getEnvironment()->addGlobal('flash', $container->flash);

	return $view;
};

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
//    return function ($request, $response) use ($container) {
//        $response = $container->view->render($response, 'errors/404.twig');
//        return $response->withStatus(404);
//    };
};


// Add the Controllers:
$container['HomeController'] = function ($container) { return new \App\Controllers\HomeController($container); };

$container['AuthController'] = function ($container) { return new \App\Controllers\Auth\AuthController($container); };
$container['PasswordController'] = function ($container) { return new \App\Controllers\Auth\PasswordController($container); };

$container['HRController'] = function ($container) { return new \App\Controllers\HRController($container); };
$container['OperationsController'] = function ($container) { return new \App\Controllers\OperationsController($container); };
$container['AccountsController'] = function ($container) { return new \App\Controllers\AccountsController($container); };


$container['csrf'] = function ($container) { return new \Slim\Csrf\Guard(); };
//$container['http'] = function ($container) { return new UploadedFile(); };

$app->add(new \App\Middleware\ValidationErrorsMiddleware($container));
$app->add(new \App\Middleware\OldInputMiddleware($container));
$app->add(new \App\Middleware\CsrfViewMiddleware($container));
$app->add(new \Slim\HttpCache\Cache('public', 30)); //86400
$app->add($container->csrf);

v::with('App\\Validation\\Rules\\');


require __DIR__ . '/../app/Routes/web.php';
require __DIR__ . '/../app/Routes/api.php';
