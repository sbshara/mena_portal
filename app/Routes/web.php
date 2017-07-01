<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/3/16
 * Time: 4:46 PM
 */

use App\Controllers\ProjectsController;
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
$app->group('/auth', function () {
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
    $this->group('/OPS', function () {
        $this->get('[/]', OperationsController::class . ':index')->setName('OPS.Home');
    });

    // projects
    $this->group('/project', function (){

        $this->get('/new', ProjectsController::class . ':getNewProject')->setName('PRO.NewProject');
        $this->post('/new', ProjectsController::class . ':postNewProject');

        $this->get('s/', ProjectsController::class . ':getAllProjects')->setName('PRO.AllProjects');


        $this->group('/project{project_id}', function () {

            $this->get('/', ProjectsController::class . ':getProjectById')->setName('PRO.ProjectById');
            $this->post('/', ProjectsController::class . ':postProjectById');
            $this->delete('/', ProjectsController::class . ':deleteProjectById');


            // tasks within a project
            $this->group('/task', function () {

                $this->get('s/', ProjectsController::class . ':getTasksByProjectId')->setName('PRO.AllProjectTasks');

                $this->get('/new', ProjectsController::class . ':getNewTask')->setName('PRO.NewTask');
                $this->post('/new', ProjectsController::class . ':postNewTask');

                $this->get('/task{task_id}', ProjectsController::class . ':getTaskById')->setName('PRO.TaskById');
                $this->post('/task{task_id}', ProjectsController::class . ':postTaskById');
                $this->delete('/task{task_id}', ProjectsController::class . ':deleteTaskById');
            });

        });

        $this->get('/', ProjectsController::class . ':ProjectIndex')->setName('PRO.Home');


        $this->group('/task', function () {

            $this->get('s/', ProjectsController::class . ':getAllTasks')->setName('PRO.AllTasks');
            $this->get('/', ProjectsController::class . ':TaskIndex')->setName('PRO.TaskHome');

        });
    });


    // Group all URLs that start with /Accounts
    $this->group('/accounts', function () {
        $this->get('/', AccountsController::class . ':index')->setName('ACC.Home');
    });

    // Guidlines Group
    $this->group('/GDLN', function () {
        $this->get('[/]',OperationsController::class . ':getAllGuidelines')->setName('GDL.AllGuidelines');
        $this->get('/new',OperationsController::class . ':getNewGuideline')->setName('GDL.NewGuideline');
        $this->post('/new',OperationsController::class . ':postNewGuidelines');
        $this->get('/{id}',OperationsController::class . ':getGuidelineById')->setName('GDL.GuidelineById');
    });

    // Vehicle Service Tracker
    $this->group('/TMS', function () {
        // TMS Home
        $this->get('/{page}/{perPage}/', OperationsController::class . ':getTMSindex')->setName('TMS.Home');

        // Trucks
        $this->group('/truck', function () {
            $this->get('s[/]', OperationsController::class . ':getAllTrucks')->setName('TMS.AllTrucks');
            $this->get('/new', OperationsController::class . ':getNewTruck')->setName('TMS.NewTruck');
            $this->post('/new', OperationsController::class . ':postNewTruck');
            $this->get('/{id}', OperationsController::class . ':getTruckById')->setName('TMS.TruckById');
            $this->post('/{id}', OperationsController::class . ':postTruckById');
        });
        // Services
        $this->group('/service', function () {
            $this->get('s[/]', OperationsController::class . ':getAllServices')->setName('TMS.AllServices');
            $this->get('/new', OperationsController::class . ':getNewService')->setName('TMS.NewService');
            $this->post('new', OperationsController::class . ':postNewService');
            $this->get('/{id}', OperationsController::class . ':getServiceById')->setName('TMS.ServiceById');
            $this->post('/{id}', OperationsController::class . ':postServiceById');
        });
        // Expenses
        $this->group('/expense', function () {
            $this->get('s[/]', OperationsController::class . ':getAllExpenses')->setName('TMS.AllExpenses');
            $this->get('/new', OperationsController::class . ':getNewExpense')->setName('TMS.NewExpense');
            $this->post('/new', OperationsController::class . ':postNewExpense');
            $this->get('/{id}', OperationsController::class . ':getExpenseById')->setName('TMS.ExpenseById');
            $this->post('/{id}', OperationsController::class . ':postExpenseById');
        });
    });
})->add(new AuthMiddleware($container));
