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

    public function one ($request, $response, $args) {
        return $response->write('<a href="redirect">Click here</a>');
    }

    public function red ($request, $response, $args) {
        return $response->withRedirect($this->router->pathFor('two'));
    }

    public function two ($request, $response, $args) {
        print_r($request->getHeader("HTTP_REFERER"));
    }





	public function getSignOut($request, $response) {
		$this->auth->logout();
		return $response->withRedirect($this->router->pathFor('home'));
	}

	public function getSignIn ($request, $response, $args) {
		return $this->view->render($response, 'auth/HR/User/signin.twig');
	}

	public function postSignIn ($request, $response, $args) {
		$validation = $this->validator->validate($request, [
			'username'  =>  v::notEmpty()->alnum('-_$!@#%^&().=+~'),
			'password'  =>  v::notEmpty()
		]);
		if ($validation->failed()) {
			return $response->withRedirect($this->router->pathFor('auth.Signin'));
		}

		$username = $request->getParam('username') . '@menaa.local';
		$password = $request->getParam('password');

		$auth = $this->auth->attemptLDAP(
			$username,
			$password
		);
		if (!$auth) {
			$this->flash->addMessage('danger', 'Could not sign you in using these credentials');
			return $response->withRedirect($this->router->pathFor('auth.Signin'));
		}

        $referer = $_SESSION['initial_uri'];

        if($referer != null) {
            $destination = $referer;
        } else {
            $destination = urlencode($this->router->pathFor('home'));
        }
        return $response->withRedirect(urldecode($destination));
	}


	// Logged In User theme and other display preferences
	public function getUserProfile ($request, $response) {
		return $this->view->render($response, 'auth/HR/User/profile.twig');
	}

	public function postUserProfile ($request, $response, $args) {
		// TODO: POST USER PROFILE
	}
}
