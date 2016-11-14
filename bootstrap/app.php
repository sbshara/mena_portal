<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/3/16
 * Time: 12:38 AM
 */

use Respect\Validation\Validator as v;

session_start();

require __DIR__ . '/../vendor/autoload.php';


$app = new \Slim\App([
	'settings'  =>  [
		'displayErrorDetails'   =>  true,
		'db'        =>  [
			'driver'    =>  'mysql',
			'host'      =>  'localhost',
			'database'  =>  'mena_portal',
			'username'  =>  'mena_portal',
			'password'  =>  'P@ssw0rd',
			'charset'   =>  'utf8',
			'collation' =>  'utf8_unicode_ci',
			'prefix'    =>  ''
		]
	]
]);

$container = $app->getContainer();

$capsule = new \Illuminate\Database\Capsule\Manager();
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Add the database connector capsule
$container['db'] = function ($container) use ($capsule) {
	return $capsule;
};

// Add the authorization module
$container['auth'] = function ($container) {
	return new \App\Auth\Auth();
};

// Add global message flash module
$container['flash'] = function ($container) {
	return new \Slim\Flash\Messages();
};

// Add global userprofile module
$container['profile'] = function ($container) {
	return new \App\Models\UserProfile();
};

// Add the Twig View module
$container['view'] = function ($container) {
	$view = new \Slim\Views\Twig(__DIR__ . '/../resources/views/', [
		'cache' =>  false
	]);

	$view->addExtension(new \Slim\Views\TwigExtension(
		$container->router,
		$container->request->getUri()
	));

	// Globalize the Auth module to access it within template partials
	$view->getEnvironment()->addGlobal('auth', [
		'check'         =>  $container->auth->check(),
		'user'          =>  $container->auth->user(),
		'profile'       =>  $container->auth->profile()
//		'settings'      =>  $container->auth->settings(),
//		'skills'        =>  $container->auth->skills()
	]);

	// Add the flash message
	$view->getEnvironment()->addGlobal('flash', $container->flash);

	return $view;
};

// Add the validation module
$container['validator'] = function ($container) {
	return new App\Validation\Validator();
};

// Add the Customized Controllers:
$container['HomeController'] = function ($container) { return new \App\Controllers\HomeController($container); };
$container['AuthController'] = function ($container) { return new \App\Controllers\Auth\AuthController($container); };
$container['PasswordController'] = function ($container) { return new \App\Controllers\Auth\PasswordController($container); };
$container['ProfileController'] = function ($container) { return new \App\Controllers\ProfileController($container); };
$container['csrf'] = function ($container) { return new \Slim\Csrf\Guard(); };



$app->add(new \App\Middleware\ValidationErrorsMiddleware($container));
$app->add(new \App\Middleware\OldInputMiddleware($container));
$app->add(new \App\Middleware\CsrfViewMiddleware($container));
$app->add($container->csrf);



v::with('App\\Validation\\Rules\\');



require __DIR__ . '/../app/routes.php';

