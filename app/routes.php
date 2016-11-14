<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/3/16
 * Time: 4:46 PM
 */

use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;



// Home page available for everyone
$app->get('/', 'HomeController:index')->setName('home');


// Routes with guest status ONLY
$app->group('', function () {

	$this->get('/auth/signup', 'AuthController:getSignUp')->setName('auth.signup');
	$this->post('/auth/signup', 'AuthController:postSignUp');

	$this->get('/auth/signin', 'AuthController:getSignIn')->setName('auth.signin');
	$this->post('/auth/signin', 'AuthController:postSignIn');


})->add(new GuestMiddleware($container));




// Routes with signed in required.
$app->group('', function () {

	$this->get('/auth/signout', 'AuthController:getSignOut')->setName('auth.signout');

	$this->get('/auth/password/change', 'PasswordController:getChangePassword')->setName('auth.password.change');
	$this->post('/auth/password/change', 'PasswordController:postChangePassword');

	$this->get('/user/profile', 'AuthController:getProfile')->setName('auth.profile');


})->add(new AuthMiddleware($container));
