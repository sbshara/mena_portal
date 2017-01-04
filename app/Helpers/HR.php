<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/11/16
 * Time: 9:33 PM
 */

namespace App\Helpers;

use App\Models\Applicant;
use App\Models\Employee;
use App\Models\EmployeeTitle;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\Languages;

class HR {

    public function allApplicants(){
		return Applicant::all();
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

	public function title() {
		return EmployeeTitle::where('emp_id', $this->employee());
	}

	public function allCountries() {
		return Country::all();
	}

    public function countryById($id){
        return Country::where('id', $id);
    }

	public function allStates() {
		return State::all();
	}

    public function stateById($id) {
        return State::where('id', $id);
    }

    public function statesByCountry($country) {
        return State::where('country_id', $country);
    }

	public function allCities() {
		return City::all();
	}

    public function cityById ($id) {
        return City::where('id', $id);
    }

	public function cityByState ($state) {
		return City::where('state_id', $state);
	}

    public function allLanguages() {
        return Languages::all();
    }

}
