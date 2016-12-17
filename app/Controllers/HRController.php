<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 10:29 AM
 */

namespace App\Controllers;

use Respect\Validation\Validator as v;
use App\Models\Applicant;
use App\Models\ApplicantDocs;
use App\Models\Document;
use App\Models\UserMaster;


class HRController extends Controller {

	// Applicants
	public function getNewApplicant ($request, $response) {
		return $this->view->render($response, 'auth/HR/Applicant/newApplicant.twig');
	}

	public function getAllApplicants ($request, $response) {
		return $this->view->render($response, 'auth/HR/Applicant/allApplicants.twig');
	}

	public function postNewApplicant ($request, $response) {
		// Defining profile pic:
		$profile = $request->getUploadedFiles()['profilepic'];
		// Define storage location for profilepic (attachment loop goes within the loop):
		if($profile->getClientFilename() == '') {
			if($request->getParam('gender') === 'M') {
				$profile_location = 'img/applicants/defaultMale.png';
			} else {
				$profile_location = 'img/applicants/defaultFemale.png';
			}
		} else {
			$profile_location = 'img/applicants/' .
				$request->getParam('first_name') . $request->getParam('last_name') .
				date('Y-m-d') . '_' .time() . $profile->getClientFilename();
		}
		// Check if validation has passed or failed
		if ($request->getParam('attachmentCounter') > -1) {
			$attachments    = $request->getUploadedFiles()['attachment'];
			// Count total attachments (excluding profile pic):
			$totalAttach = $request->getParam('attachmentCounter');
			// Validate fields of attachment data:
			for ($i = 0; $i <= $totalAttach; $i++) {
				$country        = 'attachmentCountry'.$i;
				$type           = 'attachmentType'.$i;
				$issuer         = 'attachmentIssuer'.$i;
				$issueDate      = 'attachmentIssueDate'.$i;
				$issueExpiry    = 'attachmentExpiryDate'.$i;
				$validation = $this->validator->validate($request, [
					$country            =>  v::notEmpty()->numeric(),
					$type               =>  v::notEmpty()->alnum(),
					$issuer             =>  v::notEmpty()->alnum(),
					$issueDate          =>  v::notEmpty(),
					$issueExpiry        =>  v::notEmpty(),
					'first_name'        =>  v::notEmpty()->alpha(),
					'last_name'         =>  v::notEmpty()->alpha(),
					'mobile_phone'      =>  v::notEmpty()->digit(' +()-')->phoneAvailable(),
					'per_email'         =>  v::notEmpty()->email()->noWhitespace()->emailAvailable(),
					'gender'            =>  v::notEmpty(),
					'dob'               =>  v::notEmpty()->date()->OverEighteen(),
					'nationality'       =>  v::notEmpty()->numeric(),
					'nextstep'          =>  v::notEmpty(),
					'source'            =>  v::notEmpty()
				]);
			}
			if ($validation->failed()) {
				$this->flash->addMessage('danger', 'There are errors in some fields, please check and try again!');
				return $response->withRedirect($this->router->pathFor('HR.NewApplicant'));
			}
			// If profile upload has no errors, move the file
			if ($profile->getError() === UPLOAD_ERR_OK) {
				$profile->moveTo($profile_location);
			}
			// created the applicant record:
			$applicant0 = Applicant::create([
				'first_name'        =>  $request->getParam('first_name'),
				'last_name'         =>  $request->getParam('last_name'),
				'per_email'         =>  $request->getParam('per_email'),
				'mobile_phone'      =>  $request->getParam('mobile_phone'),
				'gender'            =>  $request->getParam('gender'),
				'birth_date'        =>  $request->getParam('dob'),
				'prof_pic'          =>  $profile_location,
				'source'            =>  $request->getParam('source'),
				'nationality'       =>  $request->getParam('nationality')
			]);
			// -- Loop through each file
			for($i = 0; $i <= $totalAttach; $i++) {
				$attachment = $attachments[$i];
				$attachmentLocation =
					'docs/applicants/' . 'ID' .
					$applicant0->id . '_' .
					date('Y-m-d') . '-' . time() . '_' .
					$attachment->getClientFilename();
				// -- Get the temp file path
				$tmpattach = $attachment->getClientFilename();
				// -- Make sure we have a filepath
				if (!empty($tmpattach)) {
					if ($attachment->getError() === UPLOAD_ERR_OK) {
						$attachment->moveTo($attachmentLocation);

						$document = Document::create([
							'doc_country'       =>  $request->getParam('attachmentCountry'.$i),
							'doc_expiry_date'   =>  $request->getParam('attachmentExpiryDate'.$i),
							'doc_issue_date'    =>  $request->getParam('attachmentIssueDate'.$i),
							'doc_issuer'        =>  $request->getParam('attachmentIssuer'.$i),
							'doc_type'          =>  $request->getParam('attachmentType'.$i),
							'doc_loc'           =>  $attachmentLocation
						]);

						$mapper = ApplicantDocs::create([
							'applicant_id'      =>  $applicant0->id,
							'doc_id'            =>  $document->id
						]);
					} else {
						$this->flash->addMessage('danger', 'Something is wrong with the uploaded files!');
						return $response->withRedirect($this->router->pathFor('HR.NewApplicant'));
					}
				}
			}
		} else {
			$validation = $this->validator->validate($request, [
				'first_name'        =>  v::notEmpty()->alpha(),
				'last_name'         =>  v::notEmpty()->alpha(),
				'mobile_phone'      =>  v::notEmpty()->digit(' +()')->phoneAvailable(),
				'per_email'         =>  v::notEmpty()->email()->noWhitespace()->emailAvailable(),
				'gender'            =>  v::notEmpty(),
				'dob'               =>  v::notEmpty()->date()->OverEighteen(),
				'nationality'       =>  v::notEmpty()->numeric(),
				'nextstep'          =>  v::notEmpty(),
				'source'            =>  v::notEmpty()
			]);
			if ($validation->failed()) {
				$this->flash->addMessage('danger', 'There are errors in some fields, please check and try again!');
				return $response->withRedirect($this->router->pathFor('HR.NewApplicant'));
			}
			// If profile upload has no errors, move the file
			if ($profile->getError() === UPLOAD_ERR_OK) {
				$profile->moveTo($profile_location);
			}
			// created the applicant record:
			$applicant = Applicant::create([
				'first_name' => $request->getParam('first_name'),
				'last_name' => $request->getParam('last_name'),
				'per_email' => $request->getParam('per_email'),
				'mobile_phone' => $request->getParam('mobile_phone'),
				'gender' => $request->getParam('gender'),
				'birth_date' => $request->getParam('dob'),
				'prof_pic' => $profile_location,
				'source' => $request->getParam('source'),
				'nationality' => $request->getParam('nationality')
			]);
		}
		// Flash a message that the applicant record is created.
		$this->flash->addMessage('success', 'Applicant was created successfully');
		$direction = $request->getParam('nextstep');
		switch ($direction) {
			case 'address':
				return $response->withRedirect($this->router->pathFor('HR.NewAddress'));
			case 'skill':
				return $response->withRedirect($this->router->pathFor('HR.NewSkill'));
			case 'degree':
				return $response->withRedirect($this->router->pathFor('HR.NewEducation'));
			case 'experience':
				return $response->withRedirect($this->router->pathFor('HR.NewExperience'));
			case 'interview':
				return $response->withRedirect($this->router->pathFor('HR.NewInterview'));
			default:
				return $response->withRedirect($this->router->pathFor('home'));
		}
		// redirect to the next page (add experience, add address, ...etc.)
		return $response->withRedirect($this->router->pathFor('HR.NewAddress'));
	}






	// Employees
	public function getNewEmployee ($request, $response) {
		return$this->view->render($response, 'auth/HR/Employee/newEmployee.twig');
	}

	public function getAllEmployees ($request, $response) {
		return $this->view->render($response, 'auth/HR/Employee/allEmployees.twig');
	}

	public function postNewEmployee ($request, $response) {
		// TODO Finish Post Employee after populating the full applicants
//		$validation = $this->validator->validate($request, [
//			'first_name'        =>  v::notEmpty()->alpha(),
//			'father_name'       =>  v::notEmpty()->alpha(),
//			'last_name'         =>  v::notEmpty()->alpha(),
//			'username'          =>  v::notEmpty()->alnum('-_$!@#%^&().=+~')->UsernameAvailable(),
//			'per_email'         =>  v::notEmpty()->email()->noWhitespace()->emailAvailable(),
//			'gender'            =>  v::notEmpty(),
//			'dob'               =>  v::notEmpty()->date()->OverEighteen()
//		]);
//
//		if ($validation->failed()) {
//			return $response->withRedirect($this->router->pathFor('auth.newApplicant'));
//		}

		$employee = Applicant::create([
//			'first_name'        =>  $request->getParam('first_name'),
//			'middle_name'       =>  $request->getParam('middle_name'),
//			'father_name'       =>  $request->getParam('father_name'),
//			'last_name'         =>  $request->getParam('last_name'),
//			'per_email'         =>  $request->getParam('per_email'),
//			'mobile_phone'      =>  $request->getParam('mobile'),
//			'gender'            =>  $request->getParam('gender'),
//			'birth_date'        =>  $request->getParam('dob'),
//			'prof_pic'          =>  $request->getParam('profilePic'),
//			'marital_status'    =>  $request->getParam('marital'),
//			'religion'          =>  $request->getParam('religion'),
//			'doc_loc'           =>  "/applicants/docs/",
//			'source'            =>  $request->getParam('source')
		]);

//		$this->flash->addMessage('success', 'Employee was created successfully');

		if($request->getParam('user') == true) {
			return $response->withRedirect($this->router->pathFor('HR.NewUser'));
		} else {
			return $response->withRedirect($this->router->pathFor('home'));
		}
	}

//	public function getAllEmployees ($request, $response) {
//		$sql = "SELECT * FROM applicants WHERE first_name LIKE '%" . $arg . "%' OR last_name LIKE '%" . $arg . "%' ORDER BY first_name ASC";
//		$applicants = Applicant::query($sql);
//      TODO: use the below loop to insert the data into $response
//		while($result = $applicants->fetch_array(MYSQL_ASSOC)){
//			array_push($response, $result['first_name'].$result['last_name']);
//		}
//		return $response;
//	}

	// Users
	public function getNewUser ($request, $response) {
		return $this->view->render($response, 'auth/HR/User/NewUser.twig');
	}

	public function getAllUsers ($request, $response) {
		return $this->view->render($response, 'auth/HR/User/AllUsers.twig');
	}

	public function postNewUser ($request, $response) {
		//
	}

	public function getNewAddress ($request, $response) {
		return $this->view->render($response, 'auth/HR/Address/newAddress.twig');
	}

	public function getAllAddresses ($request, $response) {
		return $this->view->render($response, 'auth/HR/Address/allAddresses.twig');
	}

	public function postNewAddress ($request, $response) {
		//
	}


	// Departments:
	public function getNewDepartment ($request, $response) {
		return $this->view->render($response, 'auth/HR/Department/newDepartment.twig');
	}

	public function getAllDepartments ($request, $response) {
		return $this->view->render($response, 'auth/HR/Department/allDepartments.twig');
	}

	public function postNewDepartment ($request, $response) {
		//
	}


	// Education:
	public function getNewEducation ($request, $response) {
		return $this->view->render($response, 'auth/HR/Education/newEducation.twig');
	}

	public function getAllEducations ($request, $response) {
		return $this->view->render($response, 'auth/HR/Education/allEducations.twig');
	}

	public function postNewEducation ($request, $response) {
		//
	}


	// Experience:
	public function getNewExperience ($request, $response) {
		return $this->view->render($response, 'auth/HR/Experience/newExperience.twig');
	}

	public function getAllExperiences ($request, $response) {
		return $this->view->render($response, 'auth/HR/Experience/allExperiences.twig');
	}

	public function postNewExperience ($request, $response) {
		//
	}


	// Interview:
	public function getNewInterview ($request, $response) {
		return $this->view->render($response, 'auth/HR/Interview/newInterview.twig');
	}

	public function getAllInterviews ($request, $response) {
		return $this->view->render($response, 'auth/HR/Interview/allInterviews.twig');
	}

	public function postNewInterview ($request, $response) {
		//
	}


	// Skill:
	public function getNewSkill ($request, $response) {
		return $this->view->render($response, 'auth/HR/Skill/newSkill.twig');
	}

	public function getAllSkills ($request, $response) {
		return $this->view->render($response, 'auth/HR/Skill/allSkills.twig');
	}

	public function postNewSkill ($request, $response) {
		//
	}




	// AJAX Requests:
	public function stateByCountry ($request, $response, $arg) {
		$states = State::where('country_id', $arg['country_id']);
		return $response->withJson($states);
	}

	public function cityByState ($request, $response, $arg) {
		$cities = City::where('state_id', $arg['state_id']);
		return $response->withJson($cities);
	}

	public function applicantByName ($request, $response, $arg) {
		$name = $arg['applicant_name'];
		$applicant = UserMaster::where('first_name', $name)->first();
		return $response->withJson($applicant);
	}



}
