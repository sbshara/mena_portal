<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 10:29 AM
 */

namespace App\Controllers;

use App\Models\Applicant;
use App\Models\User;

class UserController extends Controller {

	public function index ($request, $response, $args) {
		$users = User::all();

		return $response->withJson($users);

	}

	protected function getUserById($id) {
		$user = User::where('id', $id)->first();
		if(!$user) {
			return null;
		}
		return $user;
	}

	public function show($request, $response, $args) {
		$user = $this->getUserById($args['id']);

		if ($user === null) {
			$this->c->flash->addMessage('warning', 'Could not find the requested user using this index!');
			return $this->view->render($response, 'home.twig');
		}
		return $this->view->render($response, 'hr/applicantById.twig');
	}

	public function store ($request, $response, $args) {
		$user = User::create([

		]);
	}






}
