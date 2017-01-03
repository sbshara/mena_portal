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

session_cache_limiter(false);
session_start();

defined('INC_ROOT') ? null : define('INC_ROOT', dirname(__DIR__));
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

require INC_ROOT . DS . 'vendor/autoload.php';

$settings = require __DIR__ . '/../app/config/settings.php';

//$container = $app->getContainer();
// $app used to be here

//$container = new \Slim\Container;

//$container['config'] = function ($container) {
//    return new \Noodlehaus\Config([
////        __DIR__ . '/../app/config/settings.php',
//        INC_ROOT . DS . 'app/config/settings.php'
//    ]);
//};

$app = new Slim($settings);

$container = $app->getContainer();

$capsule = new Capsule;
$capsule->addConnection($container['settings']['db']);
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
//        $container['config']->get('settings.twig.template'), [
        __DIR__ . '/../resources/views/', [
//            $container['config']->get('settings.twig.cache'),
            'cache' =>  __DIR__ . '/../cache',
//            $container['config']->get('settings.twig.debug'),
            'debug' =>  true
	    ]
    );

	$view->addExtension(new \Slim\Views\TwigExtension(
		$container->router,
		$container->request->getUri()
	));

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
        'applicants'        =>  $container->HR->allApplicants()

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

$container['notFoundHandler'] = function ($container) {
    return function ($request, $response) use ($container) {
        $container->view->render($response, 'errors/404.twig');
        return $response->withStatus(404);
    };
};


// Add the Controllers:
$container['HomeController'] = function ($container) { return new \App\Controllers\HomeController($container); };
$container['AuthController'] = function ($container) { return new \App\Controllers\Auth\AuthController($container); };
$container['HRController'] = function ($container) { return new \App\Controllers\HRController($container); };
$container['AddressController'] = function ($container) { return new \App\Controllers\AddressController($container); };
$container['UserController'] = function ($container) { return new \App\Controllers\UserController($container); };
$container['PasswordController'] = function ($container) { return new \App\Controllers\Auth\PasswordController($container); };
$container['csrf'] = function ($container) { return new \Slim\Csrf\Guard(); };
//$container['http'] = function ($container) { return new UploadedFile(); };

$app->add(new \App\Middleware\ValidationErrorsMiddleware($container));
$app->add(new \App\Middleware\OldInputMiddleware($container));
$app->add(new \App\Middleware\CsrfViewMiddleware($container));
$app->add(new \Slim\HttpCache\Cache('public', 30)); //86400
$app->add($container->csrf);

v::with('App\\Validation\\Rules\\');


require __DIR__ . '/../app/routes.php';
