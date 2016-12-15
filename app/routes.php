<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/3/16
 * Time: 4:46 PM
 */

use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
use App\Controllers\HRController;
use App\Controllers\Auth\AuthController;
use App\Controllers\Auth\PasswordController;
use App\Controllers\HomeController;



// Home page available for everyone
$app->get('/', HomeController::class . ':index')->setName('home');


// Routes with guest status ONLY
$app->group('', function () {
	$this->get('/auth/signin[/]', AuthController::class . ':getSignIn')->setName('auth.signin');
	$this->post('/auth/signin[/]', AuthController::class . ':postSignIn');
})->add(new GuestMiddleware($container));




// Routes with signed in required.
$app->group('', function () {


	// new group for the sake of the course:
	$this->group('/users', function () {
		$this->get('', UserController::class . ':index');
		$this->get('/{id}', UserController::class . ':show');
		$this->post('', UserController::class . ':store');
	});


	// Group all URLs that start with /HR
	$this->group('/HR', function () {
		$this->get('/new/applicant[/]', HRController::class . ':getNewApplicant')->setName('auth.new.applicant');
		$this->post('/new/applicant[/]', HRController::class . ':postNewApplicant');
		$this->get('/applicants[/]', HRController::class . ':getAllApplicants')->setName('all.applicants');
//	$this->get('/HR/applicant[/{id}]', 'HRController:getApplicantById')->setName('applicantById');
		$this->get('/new/applicant/address[/]', AddressController::class . ':getNewAddress')->setName('new.address');
		$this->post('/new/applicant/address[/]', AddressController::class . ':postNewAddress');
		$this->get('/states', AddressController::class . ':getStates')->setName('getStates');
		$this->get('/cities', AddressController::class . ':getCities')->setName('getCities');
		$this->get('/states/{country_id}', AddressController::class . ':stateByCountry')->setName('getStatesByCountry');
		$this->get('/cities/{state_id}', AddressController::class . ':cityByState')->setName('getCitiesByState');
		$this->get('/new/employee[/]', HRController::class . ':getNewEmployee')->setName('auth.new.employee');
		$this->post('/new/employee[/]', HRController::class . ':postNewEmployee');
		// get list of employees using first & last name combination {name}
		$this->post('/HR/employee[/{name}]', HRController::class . ':postApplicants')->setName('auth.applicants');
	});

	// Group all URLs that start with /auth
	$this->group('/auth', function () {
		$this->get('/signout[/]', AuthController::class . ':getSignOut')->setName('auth.signout');
		$this->get('/password/change[/]', PasswordController::class . ':getChangePassword')->setName('auth.password.change');
		$this->post('/password/change[/]', PasswordController::class . ':postChangePassword');
		$this->get('/user/profile', AuthController::class . ':getUserProfile')->setName('auth.profile'); // show logged_in user profile details
		$this->get('/user/profile/{username}', AuthController::class . ':getUserProfile')->setName('auth.profile'); // show other users profiles (if authorized)
	});

	// Group all URLs that start with /Operations
	$this->group('/Operations', function () {

	});



})->add(new AuthMiddleware($container));
