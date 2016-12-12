<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/11/16
 * Time: 9:33 PM
 */

namespace App\Auth;

use App\Models\Applicant;
use App\Models\Employee;
use App\Models\EmployeeTitle;
use App\Models\User;
use App\Models\ProfileSetting;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class HR {

	public function allApplicants(){
		return Applicant::all();
	}

	public function applicantById($id){
		return Applicant::where('id', $id)->first();
	}

	public function allEmployees(){
		return Employee::all();
	}

	public function employeeById($id){
		return Employee::where('id', $id)->first();
	}

	public function allUsers(){
		return User::all();
	}

	public function userById($id){
		return User::where('id', $id);
	}


}
