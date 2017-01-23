<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/3/16
 * Time: 4:46 PM
 */

use App\Middleware\AuthMiddleware;
use App\Controllers\HRController;

$app->group('', function () {
	// AJAX Requests:
	$this->group('/AJAX', function () {
		// Get States by Country ID:
		$this->get('/states/{country_id}', HRController::class . ':stateByCountry')->setName('AJAX.StatesByCountry');
		// Get Cities by State ID:
		$this->get('/cities/{state_id}', HRController::class . ':cityByState')->setName('AJAX.CitiesByState');
		// Get Applicant Name by string:
		$this->get('/applicant/{applicant_name}', HRController::class . ':applicantByName')->setName('AJAX.ApplicantName');
        // Get Country by ID:
        $this->get('/countries/{country_id}', HRController::class . ':countryById')->setName('AJAX.countryById');
        // Get Department Head Information
        $this->get('/department/{department_id}', HRController::class . ':DepartmentHead')->setName('AJAX.headByDepartment');
	});

})->add(new AuthMiddleware($container));
