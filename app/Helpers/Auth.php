<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/11/16
 * Time: 9:33 PM
 */

namespace App\Helpers;

use App\Models\User;
use App\Models\ProfileSetting;
use App\Models\UserMaster;


class Auth {

	public function check () {
		return isset($_SESSION['user']);
	}

	public function attempt ($user, $password) {
		$user = User::where('username', $user)->first();
		if (!$user) {
			return false;
		}
		if(password_verify($password, $user->password)){
			$_SESSION['user'] = $user->id;
			return true;
		}
		return false;
	}

	public function logout() {
		unset($_SESSION['user']);
		session_destroy($_SESSION['user']);
	}

	public function user() {
		if (isset($_SESSION['user'])) {
			return User::find($_SESSION['user'])->first();
		} else {
			return false;
		}
	}

	public function userMaster () {
		if(!$this->user()){
			return false;
		} else {
			if (isset($_SESSION['user'])) {
				return UserMaster::where('u_id', $_SESSION['user'])->first();
			} else {
				return false;
			}
		}
	}

	public function profile () {
		if (isset($_SESSION['user'])) {
			return ProfileSetting::where('user_id', $_SESSION['user'])->first();
		} else {
			return false;
		}
	}




}
