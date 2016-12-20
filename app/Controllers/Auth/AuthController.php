<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 10:29 AM
 */

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use Respect\Validation\Validator as v;
use Slim\Http;


class AuthController extends Controller {

	public function getSignOut($request, $response) {
		$this->auth->logout();
		return $response->withRedirect($this->router->pathFor('home'));
	}

	public function getSignIn ($request, $response) {
		return $this->view->render($response, 'auth/HR/User/signin.twig');
	}

	public function postSignIn ($request, $response) {
		$validation = $this->validator->validate($request, [
			'username'  =>  v::notEmpty()->alnum('-_$!@#%^&().=+~'),
			'password'  =>  v::notEmpty()
		]);
		if ($validation->failed()) {
			return $response->withRedirect($this->router->pathFor('auth.Signin'));
		}

		$auth = $this->auth->attempt(
			$request->getParam('username'),
			$request->getParam('password')
		);
		if (!$auth) {
			$this->flash->addMessage('danger', 'Could not sign you in using these credentials');
			return $response->withRedirect($this->router->pathFor('auth.Signin'));
		}
		return $response->withRedirect($this->router->pathFor('home'));
	}


	// Logged In User theme and other display preferences
	public function getUserProfile ($request, $response) {
		return $this->view->render($response, 'auth/HR/User/profile.twig');
	}

	public function postUserProfile ($request, $response, $args) {
		// TODO: POSTUSERPROFILE
	}
}
