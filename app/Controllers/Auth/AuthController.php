<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 10:29 AM
 */

namespace App\Controllers\Auth;

use App\Models\User;
use App\Controllers\Controller;
use Respect\Validation\Validator as v;
use App\Auth\Auth;


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
			$this->flash->addMessage('danger', 'Could not sign you in using these details');
			return $response->withRedirect($this->router->pathFor('auth.signin'));
		}
		return $response->withRedirect($this->router->pathFor('home'));

	}


	public function getSignUp ($request, $response) {

		return $this->view->render($response, 'auth/signup.twig');

	}

	public function postSignUp ($request, $response) {

		$validation = $this->validator->validate($request, [
			'first_name'        =>  v::notEmpty()->alpha(),
			'last_name'         =>  v::notEmpty()->alpha(),
			'username'          =>  v::notEmpty()->alnum('-_$!@#%^&().=+~')->UsernameAvailable(),
			'email'             =>  v::notEmpty()->email()->noWhitespace()->emailAvailable(),
			'password'          =>  v::notEmpty(),
			'confirm_password'  =>  v::Identical($request->getParam('password'))
		]);

		if ($validation->failed()) {
			return $response->withRedirect($this->router->pathFor('auth.signup'));
		}

		$user = User::create([
					'first_name'    =>  $request->getParam('first_name'),
					'last_name'     =>  $request->getParam('last_name'),
					'username'      =>  $request->getParam('username'),
					'email'         =>  $request->getParam('email'),
					'password'      =>  password_hash($request->getParam('password'), PASSWORD_DEFAULT)
		]);

		$this->flash->addMessage('success', 'You have been signed up');

		$this->auth->attempt($user->username, $request->getParam('password'));

		return $response->withRedirect($this->router->pathFor('home'));
	}

	public function getProfile ($request, $response) {

		return $this->view->render($response, 'user/profile.twig');

	}

}
