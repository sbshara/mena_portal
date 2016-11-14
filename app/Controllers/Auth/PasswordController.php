<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/13/16
 * Time: 2:02 PM
 */

namespace App\Controllers\Auth;

use App\Models\User;
use App\Controllers\Controller;
use Respect\Validation\Validator as v;


class PasswordController extends Controller {

	public function getChangePassword($request, $response) {

		return $this->view->render($response, 'auth/password/change.twig');

	}

	public function postChangePassword($request, $response) {

		$validation = $this->validator->validate($request, [
			'password'          =>  v::noWhitespace()->notEmpty()->matchesPassword($this->auth->user()->password),
			'new_password'      =>  v::noWhitespace()->notEmpty(),
			'confirm_password'  =>  v::Identical($request->getParam('new_password'))
		]);

		if($validation->failed()){
			return $response->withRedirect($this->router->pathFor('auth.password.change'));
		}

		$this->auth->user()->setPassword($request->getParam('new_password'));

		$this->flash->addMessage('success', 'Your password was changed successfully');

		return $response->withRedirect($this->router->pathFor('home'));

	}



}
