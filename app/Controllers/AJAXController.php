<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 10:29 AM
 */

namespace App\Controllers;

use App\Models\VehicleBrandModel;
use App\Models\Applicant;
use App\Models\Employee;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\DepartmentHeads;


class AJAXController extends Controller {

	// AJAX Requests:
	public function stateByCountry ($request, $response, $arg) {
		$states = State::where('country_id', (int)$arg['country_id'])->orderBy('state_name', 'ASC')->get();
        if (count($states) <= 0) {
            return $response->withStatus(404)->withJson(['error (404):' => 'No Records Found!']);
        }
		return $response->withJson($states);
	}

	public function cityByState ($request, $response, $arg) {
		$cities = City::where('state_id', $arg['state_id'])->orderBy('city_name', 'ASC')->get();
        if (count($cities) <= 0) {
            return $response->withStatus(404)->withJson(['error (404):' => 'No Records Found!']);
        }
		return $response->withJson($cities);
	}

	public function applicantByName ($request, $response, $arg) {
		$name = "%".$arg['applicant_name']."%";
		$applicant = Applicant::where(
                                    'first_name',
                                    'LIKE',
                                    $name
                                )->orWhere(
                                    'last_name',
                                    'LIKE',
                                    $name
                                )->orderBy(
                                    'first_name',
                                    'ASC'
                                )->get();
        if (count($applicant) <= 0) {
            return $response->withStatus(404)->withJson(['error (404):' => 'No Records Found!']);
        }
		return $response->withJson($applicant);
	}

    public function countryById ($request, $response, $arg) {
        $countryName = Country::where('id', (int)$arg['country_id'])->get();
        return $response->withJson($countryName);
    }

    public function DepartmentHead ($request, $response, $arg){
        $deptID = $arg['department_id'];
        $empID = DepartmentHeads::where(
                        'dept_id', $deptID)->orderBy(
                                            'from_date', 'DESC')->get()->first()['emp_id'];
        $appID = Employee::where(
                    'id', $empID)->get()->first()['applicant_id'];
        $applicant = Applicant::where(
            'id', $appID)->get()->first();
        return $response->withJson($applicant);
    }

    public function modelByBrand ($request, $response, $args) {
        $brand = "%".$args['brand_name']."%";
        $models = VehicleBrandModel::where('brand_name', 'LIKE', $brand)->orderBy('model_name', 'ASC')->get()->unique('model_name');
        return $response->withJson($models);
    }

}
