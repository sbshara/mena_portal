<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/11/16
 * Time: 9:33 PM
 */

namespace App\Auth;

use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserSettings;
use App\Models\UserSkills;

class Auth {

	public function user() {
		if (isset($_SESSION['user'])) {
			return User::find($_SESSION['user']);
		} else {
			return false;
		}
	}

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

	public function profile () {
		if (isset($_SESSION['user'])) {
			return UserProfile::where('user_id', $_SESSION['user'])->first();
		} else {
			return false;
		}
	}

//	public function settings() {
//		return UserSettings::where('userprofile_id', $this->userProfile()->id);
//	}
//
//	public function skills () {
//		return UserSkills::where('userprofile_id', $this->userProfile()->id);
//	}


}
