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

	$this->get('/auth/signin[/]', 'AuthController:getSignIn')->setName('auth.signin');
	$this->post('/auth/signin[/]', 'AuthController:postSignIn');


})->add(new GuestMiddleware($container));




// Routes with signed in required.
$app->group('', function () {

	$this->get('/HR/new/applicant[/]', 'HRController:getNewApplicant')->setName('auth.new.applicant');
	$this->post('/HR/new/applicant[/]', 'HRController:postNewApplicant');

	$this->get('/HR/applicants[/]', 'HRController:getAllApplicants')->setName('all.applicants');
	$this->get('/HR/applicant[/{$id}]', 'HRController:getApplicantById')->setName('applicantById');

	$this->get('/HR/new/applicant/address[/]', 'AddressController:getNewAddress')->setName('new.address');
	$this->post('/HR/new/applicant/address[/]', 'AddressController:postNewAddress');





	$this->get('/HR/states', 'AddressController:getStates')->setName('getStates');
	$this->get('/HR/states/{id}', 'AddressController:stateByCountry')->setName('getStatesByCountry');

	$this->get('/HR/cities', 'AddressController:getCities')->setName('getCities');
	$this->get('/HR/cities/{id}', 'AddressController:cityByState')->setName('getCitiesByState');







	$this->get('/HR/new/employee[/]', 'AuthController:getNewEmployee')->setName('auth.new.employee');
	$this->post('/HR/new/employee[/]', 'AuthController:postNewEmployee');

	// get list of employees using first & last name combination {name}
	$this->post('/HR/employee[/{name}]', 'AuthController::postApplicants')->setName('auth.applicants');

	$this->get('/auth/signout[/]', 'AuthController:getSignOut')->setName('auth.signout');

	$this->get('/auth/password/change[/]', 'PasswordController:getChangePassword')->setName('auth.password.change');
	$this->post('/auth/password/change[/]', 'PasswordController:postChangePassword');

	$this->get('/user/profile[/{$username}]', 'AuthController:getProfile($username)')->setName('auth.profile');


})->add(new AuthMiddleware($container));
