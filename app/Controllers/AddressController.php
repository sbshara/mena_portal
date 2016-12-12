<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 12/2/16
 * Time: 12:05 AM
 */

namespace App\Controllers;

use App\Models\Applicant;
use App\Models\Addresses;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\ApplicantAddress;

class AddressController extends Controller {

	public function getNewAddress ($request, $response) {
		return $this->view->render($response, 'hr/newAddress.twig');
	}

	public function postNewAddress ($request, $response) {

	}

	public function getStates ($request, $response, $arg) {
		return $this->view->render($response, 'partials/states.twig');
	}

	public function getCities ($request, $response, $arg) {
		return $this->view->render($response, 'partials/cities.twig');
	}

}
