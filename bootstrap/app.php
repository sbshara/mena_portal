<?php
/**
 * Created by PhpStorm.
 * User: Shiblie
 * Date: 11/3/16
 * Time: 12:38 AM
 */

use Respect\Validation\Validator as v;
use \Slim\App as Slim;
use \Slim\Http\UploadedFile;


session_cache_limiter(false);
session_start();

defined('INC_ROOT') ? null : define('INC_ROOT', dirname(__DIR__));
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

require INC_ROOT . DS . 'vendor/autoload.php';

$app = new Slim([
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
		],
        'app'       =>  [
            'url'       =>  'http://localhost/mena_portal',
            'hash'      =>  [
                'algo'      =>  PASSWORD_DEFAULT,
                'cost'      =>  10
            ]
        ],
        'auth'      =>  [
            'session'   =>  'user_id',
            'remember'  =>  'user_r'
        ],
        'mail'      =>  [
            'smtp_auth'     =>  true,
            'smtp_secure'   =>  'tls',
            'host'          =>  'smtp.menaa.local',
            'username'      =>  'mena_portal@menaa.local',
            'password'      =>  'P@ssw0rd',
            'port'          =>  587,
            'html'          =>  true
        ],
        'twig'      =>  [
            'debug'         =>  true
        ],
        'csrf'      =>  [
            'session'       =>  'csrf_token'
        ]
	]
]);

$container = $app->getContainer();

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

// Add the database connector capsule
$container['db'] = function ($container) use ($capsule) {
	return $capsule;
};

// Add the authorization module
$container['auth'] = function ($container) {
	return new \App\Helpers\Auth();
};

$container['HR'] = function ($container) {
    return new \App\Helpers\HR();
};

// Add global message flash module
$container['flash'] = function ($container) {
	return new \Slim\Flash\Messages();
};

// Add the Twig View module
$container['view'] = function ($container) {
	$view = new \Slim\Views\Twig(__DIR__ . '/../resources/views/', [
		'cache' =>  __DIR__ . '/../cache',
        'debug' =>  true
	]);

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

// Add the validation module
$container['validator'] = function ($container) {
	return new App\Validation\Validator();
};

$container['cache'] = function ($container) {
	return new \App\Middleware\HttpCache\CacheProvider();
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
$app->add(new \Slim\HttpCache\Cache('public', 86400));
$app->add($container->csrf);

v::with('App\\Validation\\Rules\\');


require __DIR__ . '/../app/routes.php';

