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
use Respect\Validation\Validator as v;


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

	public function postNewApplicant ($request, $response) {
		$validation = $this->validator->validate($request, [
			'first_name'        =>  v::notEmpty()->alpha(),
			'father_name'       =>  v::notEmpty()->alpha(),
			'middle_name'       =>  v::notEmpty()->alpha(),
			'last_name'         =>  v::notEmpty()->alpha(),
			'mobile'            =>  v::notEmpty()->digit(' +()'),
			'per_email'         =>  v::notEmpty()->email()->noWhitespace()->emailAvailable(),
			'gender'            =>  v::notEmpty(),
			'dob'               =>  v::notEmpty()->date()->OverEighteen(),
		]);

		if ($validation->failed()) {
			return $response->withRedirect($this->router->pathFor('auth.new.applicant'));
		}

		$file = $request->getUploadedFiles();
		$upload = $file['profilepic'];
		$filename = $upload->getClientFilename();
		$upload->moveTo('img/applicants/' . $filename);

		$applicant = Applicant::create([
			'first_name'        =>  $request->getParam('first_name'),
			'middle_name'       =>  $request->getParam('middle_name'),
			'father_name'       =>  $request->getParam('father_name'),
			'last_name'         =>  $request->getParam('last_name'),
			'per_email'         =>  $request->getParam('per_email'),
			'mobile_phone'      =>  $request->getParam('mobile'),
			'gender'            =>  $request->getParam('gender'),
			'birth_date'        =>  $request->getParam('dob'),
			'prof_pic'          =>  'applicants/' . $filename,
			'marital_status'    =>  $request->getParam('marital'),
			'religion'          =>  $request->getParam('religion'),
			'doc_loc'           =>  "docs/applicants/",
			'source'            =>  $request->getParam('source')
		]);


		$this->flash->addMessage('success', 'Applicant was created successfully');

		if($request->getParam('employee') == true) {
			return $response->withRedirect($this->router->pathFor('auth.new.employee'));
		} else {
			return $response->withRedirect($this->router->pathFor('home'));
		}
	}

	public function getProfile ($request, $response, $arg) {
		return $this->view->render($response, 'user/profile.twig');
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




}
