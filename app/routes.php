<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/3/16
 * Time: 4:46 PM
 */

use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;

use App\Controllers\Auth\AuthController;
use App\Controllers\Auth\PasswordController;
use App\Controllers\HomeController;
use App\Controllers\HRController;
use App\Controllers\OperationsController;
use App\Controllers\AccountsController;



// Home page available for everyone
$app->get('/', HomeController::class . ':index')->setName('home');


// Routes with guest status ONLY
$app->group('', function () {
	$this->get('/auth/signin', AuthController::class . ':getSignIn')->setName('auth.Signin');
	$this->post('/auth/signin', AuthController::class . ':postSignIn');
})->add(new GuestMiddleware($container));



// Routes with signed in required.
$app->group('', function () {
	// Group all URLs that start with /auth
	$this->group('/auth', function () {
		// Group all URLs that start with /HR
		$this->group('/HR', function () {
            $this->get('/wizard[/]', HRController::class . ':getWizard')->setName('HR.ApplicantWizard');
			// Applicants:
			$this->group('/applicant', function () {
				// View New Applicant page:
				$this->get('/', HRController::class . ':getNewApplicant')->setName('HR.NewApplicant');
				// Submit a new Applicant:
				$this->post('/', HRController::class . ':postNewApplicant');
				// View All Applicants
				$this->get('s/', HRController::class . ':getAllApplicants')->setName('HR.AllApplicants');
			});
			// Employees:
			$this->group('/employee', function () {
				// View new Employee page:
				$this->get('/', HRController::class . ':getNewEmployee')->setName('HR.NewEmployee');
				// Submit a new Employee
				$this->post('/', HRController::class . ':postNewEmployee');
				// View All Employees:
				$this->get('s/', HRController::class . ':getAllEmployees')->setName('HR.AllEmployees');
				// get employee by ID
				$this->get('/{id}', HRController::class . ':postApplicants')->setName('HR.EmployeeById');
			});
			// Users:
			$this->group('/user', function () {
				// View new Employee page:
				$this->get('/', HRController::class . ':getNewUser')->setName('HR.NewUser');
				// Submit a new Employee
				$this->post('/', HRController::class . ':postNewUser');
				// View All Employees:
				$this->get('s/', HRController::class . ':getAllUsers')->setName('HR.AllUsers');
				// View User (other than logged In):
				$this->get('/{id}', AuthController::class . ':getUserById')->setName('auth.ProfileById');
				// View Logged in User Profile
				$this->get('/profile/', AuthController::class . ':getUserProfile')->setName('auth.Profile');
			});
			// Addresses:
			$this->group('/address', function () {
				// View new Address:
				$this->get('/', HRController::class . ':getNewAddress')->setName('HR.NewAddress');
				// Submit a new Address:
				$this->post('/', HRController::class . ':postNewAddress');
				// View All Addresses:
				$this->get('es/', HRController::class . ':getAllAddresses')->setName('HR.AllAddresses');
			});
			// Education Degrees:
			$this->group('/education', function () {
				// View new Education:
				$this->get('/', HRController::class . ':getNewEducation')->setName('HR.NewEducation');
				// Submit a new Education:
				$this->post('/', HRController::class . ':postNewEducation');
				// View All Educations:
				$this->get('s/', HRController::class . ':getAllEducation')->setName('HR.AllEducations');
			});
			// Professional Experience
			$this->group('/professional_experience', function () {
				// View new Experience:
				$this->get('/', HRController::class . ':getNewExperience')->setName('HR.NewExperience');
				// Submit a new Experience:
				$this->post('/', HRController::class . ':postNewExperience');
				// View All Experiences:
				$this->get('s/', HRController::class . ':getAllExperiences')->setName('HR.AllExperiences');
			});
			// Skills:
			$this->group('/skill', function () {
				// View new Skill:
				$this->get('/', HRController::class . ':getNewSkill')->setName('HR.NewSkill');
				// Submit Skills Collection:
				$this->post('/', HRController::class . ':postNewSkill');
				// View All Skills:
				$this->get('s/', HRController::class . ':getAllSkills')->setName('HR.AllSkills');
			});
			// Interviews:
			$this->group('/interview', function () {
				// View New Interview:
				$this->get('/', HRController::class . ':getNewInterview')->setName('HR.NewInterview');
				// Submit a new Interview appointment:
				$this->post('/', HRController::class . ':postNewInterview');
				// View All Interviews:
				$this->get('s/', HRController::class . ':getAllInterviews')->setName('HR.AllInterviews');
			});
			// Departments:
			$this->group('/department', function () {
				// View New Department (Mapping):
				$this->get('/', HRController::class . ':getNewDepartment')->setName('HR.NewDepartment');
				// Submit a New Department (Mapping):
				$this->post('/', HRController::class . ':postNewDepartment');
				// View All Departments:
				$this->get('s/', HRController::class . ':getAllDepartments')->setName('HR.AllDepartments');
			});
		});
		// SignOut Page:
		$this->get('/sign/out', AuthController::class . ':getSignOut')->setName('auth.Signout');
		// Change Password Viewing Page:
		$this->get('/change/password', PasswordController::class . ':getChangePassword')->setName('auth.PasswordChange');
		// Submit Password Change:
		$this->post('/change/password', PasswordController::class . ':postChangePassword');
	});

	// Group all URLs that start with /Operations
	$this->group('/Operations', function () {
		$this->get('/', OperationsController::class . ':index')->setName('OPS.Home');
	});

	// Group all URLs that start with /Accounts
	$this->group('/accounts', function () {
		$this->get('/', AccountsController::class . ':index')->setName('ACC.Home');
	});

	// AJAX Requests:
	$this->group('/AJAX', function () {
		// Get States by Country ID:
		$this->get('/states/{country_id}', HRController::class . ':stateByCountry')->setName('AJAX.StatesByCountry');
		// Get Cities by State ID:
		$this->get('/cities/{state_id}', HRController::class . ':cityByState')->setName('AJAX.CitiesByState');
		// Get Applicant Name by string:
		$this->get('/applicant/{applicant_name}', HRController::class . ':applicantByName')->setName('AJAX.ApplicantName');
	});

})->add(new AuthMiddleware($container));
