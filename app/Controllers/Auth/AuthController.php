<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 10:29 AM
 */

namespace App\Controllers\Auth;

use App\Models\Applicant;
use App\Controllers\Controller;
use App\Models\ApplicantDocs;
use App\Models\Document;
use App\Models\State;
use Illuminate\Support\Facades\Request;
use Respect\Validation\Validator as v;
use Slim\Http;


class AuthController extends Controller {

	public function getSignOut($request, $response) {
		$this->auth->logout();
		return $response->withRedirect($this->router->pathFor('home'));
	}

	public function getSignIn ($request, $response) {
		return $this->view->render($response, 'auth/signin.twig');
	}

	public function postSignIn ($request, $response) {
		$validation = $this->validator->validate($request, [
			'username'  =>  v::notEmpty()->alnum('-_$!@#%^&().=+~'),
			'password'  =>  v::notEmpty()
		]);
		if ($validation->failed()) {
			return $response->withRedirect($this->router->pathFor('auth.signin'));
		}

		$auth = $this->auth->attempt(
			$request->getParam('username'),
			$request->getParam('password')
		);
		if (!$auth) {
			$this->flash->addMessage('danger', 'Could not sign you in using these credentials');
			return $response->withRedirect($this->router->pathFor('auth.signin'));
		}
		return $response->withRedirect($this->router->pathFor('home'));
	}

	public function getNewApplicant ($request, $response) {
		return $this->view->render($response, 'auth/newApplicant.twig');
	}

	public function postNewApplicant ($request, $response, $arg) {

		// Check validation of the applicant information:
		$validation = $this->validator->validate($request, [
			'first_name'        =>  v::notEmpty()->alpha(),
			'last_name'         =>  v::notEmpty()->alpha(),
			'mobile_phone'      =>  v::notEmpty()->digit(' +()')->phoneAvailable(),
			'per_email'         =>  v::notEmpty()->email()->noWhitespace()->emailAvailable(),
			'gender'            =>  v::notEmpty(),
			'dob'               =>  v::notEmpty()->date()->OverEighteen(),
			'nationality'       =>  v::notEmpty()->min(1)
		]);
		// Check if validation has passed or failed
		if ($validation->failed()) {
			return $response->withRedirect($this->router->pathFor('auth.new.applicant'));
		}
// --------------------------------------------------------------------------------------------------------
        // upload profile picture
		$profile = $request->getUploadedFiles()['profilepic'];
		$profile_location = 'img/applicants/'.$profile->getClientFilename();
		if (empty($profile)) {
			$this->flash->addMessage('danger', 'Expected a profile image to be uploaded!');
			return $response->withRedirect($this->router->pathFor('auth.new.applicant'));
		}
		if ($profile->getError() === UPLOAD_ERR_OK) {
			$uploadFileName = $profile->getClientFilename();
			$profile->moveTo("img/applicants/" . $uploadFileName);
		}

		// created the applicant record:
		$applicant = Applicant::create([
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

		$totalAttach = count($request->getUploadedFiles()['attachment']);
		$attachments = $request->getUploadedFiles()['attachment'];
		// -- Loop through each file
		for($i = 0; $i <= $totalAttach; $i++) {
			$attachment = $attachments[$i];
            $attachmentLocation = 'docs/applicants/'.'id'.$applicant->id.'_'.$attachment->getClientFilename();
			// -- Get the temp file path
			$tmpattach = $attachment->file;
			// -- Make sure we have a filepath
			if (!empty($tmpattach)) {
				if ($attachment->getError() === UPLOAD_ERR_OK || $attachment->getError() == 0) {
					$uploadAttchName = $attachment->getClientFilename();
					$attachment->moveTo("docs/applicants/" . $uploadAttchName);
	//				var_dump($attachment);
	//				die();
						$document = Document::create([
							'doc_country'       =>  $request->getParam('attachmentCountry'.$i),
							'doc_expiry_date'   =>  $request->getParam('attachmentExpiryDate'.$i),
							'doc_issue_date'    =>  $request->getParam('attachmentIssueDate'.$i),
							'doc_issuer'        =>  $request->getParam('attachmentIssuer'.$i),
							'doc_type'          =>  $request->getParam('attachmentType'.$i),
							'doc_loc'           =>  $attachment->getClientFilename()
						]);

						$mapper = ApplicantDocs::create([
							'applicant_id'      =>  $applicant->id,
							'doc_id'            =>  $document->id
						]);
				} else {
					$this->flash->addMessage('danger', 'Something is wrong with the uploaded files!');
					return $response->withRedirect($this->router->pathFor('auth.new.applicant'));
				}
			}
		}


		// Flash a message that the applicant record is created.
		$this->flash->addMessage('success', 'Applicant was created successfully');

		// redirect to the next page (add experience, add address, ...etc.)
		return $response->withRedirect($this->router->pathFor('auth.new.address'));
	}

	public function getProfile ($request, $response, $arg) {
		return $this->view->render($response, 'auth/profile.twig');
	}

	public function getNewEmployee($request, $response){
		return$this->view->render($response, 'auth/newEmployee.twig');
	}

	public function postNewEmployee($request, $response) {
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
			return $response->withRedirect($this->router->pathFor('auth.new.user'));
		} else {
			return $response->withRedirect($this->router->pathFor('home'));
		}
	}

	public function postApplicants($request, $response, $arg){
		$sql = "SELECT * FROM applicants WHERE first_name LIKE '%" . $arg . "%' OR last_name LIKE '%" . $arg . "%' ORDER BY first_name ASC";
		$applicants = Applicant::query($sql);
		while($result = $applicants->fetch_array(MYSQL_ASSOC)){
			array_push($response, $result['first_name'].$result['last_name']);
		}
		return $response;
	}

	public function getNewAddress ($request, $response) {
		return $this->view->render($response, 'auth/newAddress.twig');
	}

	public function postNewAddress ($request, $response) {

	}

	public function getStateByCountry ($request, $response) {
		$country = $request->getParam('country');
		$sql = "SELECT * FROM states tbl1 JOIN countries tbl2 ON tbl2.id = tbl1.country_id WHERE country_name LIKE '%" . $country . "%'";

		$states = State::query($sql);
		foreach ($states as $state) {
			$result  = "<option id='";
			$result .= $state->id;
			$result .= "'>";
			$result .= $state->state_name;
			$result .= "</option>";
			array_push($response, $result);
		}
//		return $this->view->render($response, 'partials/states.twig');
		return $response;
	}

	public function getCityByState ($request, $response, $arg) {
		$state = $request->getAttribute('state');
		$cities = City::where('state_id', $state);
		return $this->view->render($response, 'partials/cities.twig');
	}



}
