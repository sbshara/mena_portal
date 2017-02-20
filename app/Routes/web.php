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
	$this->get('/auth/signin[/{referer}]', AuthController::class . ':getSignIn')->setName('auth.Signin');
	$this->post('/auth/signin[/{referer}]', AuthController::class . ':postSignIn');
})->add(new GuestMiddleware($container));


// Routes with signed in required.
$app->group('', function () {

	// Group all URLs that start with /auth
	$this->group('/auth', function () {

        // SignOut Page:
        $this->get('/sign/out', AuthController::class . ':getSignOut')->setName('auth.Signout');
        // Change Password Viewing Page:
        $this->get('/change/password', PasswordController::class . ':getChangePassword')->setName('auth.PasswordChange');
        // Submit Password Change:
        $this->post('/change/password', PasswordController::class . ':postChangePassword');



		// Group all URLs that start with /HR
		$this->group('/HR', function () {
			$this->get('', HRController::class . ':index')->setName('HR.Home');
            $this->get('/wizard[/]', HRController::class . ':getWizard')->setName('HR.ApplicantWizard');
			// Applicants:
			$this->group('/applicant', function () {
				// View New Applicant page:
				$this->get('/', HRController::class . ':getNewApplicant')->setName('HR.NewApplicant');
				// Submit a new Applicant:
				$this->post('/[{id}]', HRController::class . ':postNewApplicant');
                // View existing Applicant record
                $this->get('/update/{id}', HRController::class . ':getApplicantByID')->setName('HR.ApplicantById');
				// Update existing Applicant Record
				$this->post('/update/{id}', HRController::class . ':postApplicantByID');
				// View All Applicants
				$this->get('s', HRController::class . ':getAllApplicants')->setName('HR.AllApplicants');
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
			// Interviews:
			$this->group('/interview', function () {
				// View New Interview:
				$this->get('[/{applicant_id}]', HRController::class . ':getNewInterview')->setName('HR.NewInterview');
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
            $this->group('/miscellaneous', function (){
                $this->get('/', HRController::class . ':getMiscellaneous')->setName('HR.Miscellaneous');
                // Skills:
                $this->group('/skill', function () {
                    // View new Skill:
                    $this->get('/', HRController::class . ':getNewSkill')->setName('HR.NewSkill');
                    // Submit Skills Collection:
                    $this->post('/', HRController::class . ':postNewSkill');
                    // View All Skills:
                    $this->get('s/', HRController::class . ':getAllSkills')->setName('HR.AllSkills');
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
            });
		});



        // Group all URLs that start with /ops
        $this->group('/ops', function () {
            $this->get('[/]', OperationsController::class . ':index')->setName('OPS.Home');

            // Guidlines Group
            $this->group('/guidelines', function () {
                $this->get('[/]',OperationsController::class . ':getAllGuidelines')->setName('OPS.AllGuidelines');
                $this->get('/new',OperationsController::class . ':getNewGuideline')->setName('OPS.NewGuideline');
                $this->post('/new',OperationsController::class . ':postNewGuidelines');
                $this->get('/{id}',OperationsController::class . ':getGuidelineById')->setName('OPS.GuidelineById');
            });

            // Vehicle Service Tracker
            $this->group('/tms', function () {
                $this->get('[/]', OperationsController::class . ':getTMSDB')->setName('OPS.TMS.DB');
            });

            // Resources (such as trucks)
            $this->group('/assets', function(){
                $this->get('/', OperationsController::class . ':getAssets')->setName('OPS.Assets');
                $this->group('/truck', function(){
                    // Get All Trucks
                    $this->get('s/', OperationsController::class . ':getAllTrucks')->setName('OPS.Assets.AllTrucks');

                    // Get New Truck page
                    $this->get('/new', OperationsController::class . ':getNewTruck')->setName('OPS.Assets.NewTruck');
                    // Post New Truck
                    $this->post('/new', OperationsController::class . ':postNewTruck');

                    // Get Truck By ID
                    $this->get('/{id}', OperationsController::class . ':getTruckById')->setName('OPS.Assets.TruckById');
                    // Update Existing Truck
                    $this->post('/{id}', OperationsController::class . ':postTruckById');
                });
            });

        });

        // Group all URLs that start with /Accounts
        $this->group('/accounts', function () {
            $this->get('/', AccountsController::class . ':index')->setName('ACC.Home');
        });
	});



})->add(new AuthMiddleware($container));
