<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/3/16
 * Time: 4:46 PM
 */

use App\Middleware\AuthMiddleware;
use App\Controllers\AJAXController;

$app->group('/auth', function () {
	// AJAX Requests:
	$this->group('/AJAX', function () {
		// Get States by Country ID:
		$this->get('/states/{country_id}', AJAXController::class . ':stateByCountry')->setName('AJAX.StatesByCountry');
		// Get Cities by State ID:
		$this->get('/cities/{state_id}', AJAXController::class . ':cityByState')->setName('AJAX.CitiesByState');
		// Get Applicant Name by string:
		$this->get('/applicant/{applicant_name}', AJAXController::class . ':applicantByName')->setName('AJAX.ApplicantName');
        // Get Country by ID:
        $this->get('/countries/{country_id}', AJAXController::class . ':countryById')->setName('AJAX.countryById');
        // Get Department Head Information
        $this->get('/department/{department_id}', AJAXController::class . ':DepartmentHead')->setName('AJAX.headByDepartment');
        // Get Vehicle Models using Brand Name
        $this->get('/models/{brand_name}', AJAXController::class . ':modelByBrand')->setName('AJAX.ModelByBrand');
        // TMS Uploading Files
        $this->post('/upload/', AJAXController::class . ':postUploadFiles')->setName('TMS.Upload');
	});

})->add(new AuthMiddleware($container));
