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

use PDO;

class AddressController extends Controller {

//	protected function getStateByCountryId ($id) {
////		if ($this->c->HR->stateByCountry($id) === 0){
////			return null;
////		}
//		return $this->c->HR->statesByCountry($id);

//		$sql = $this->c->db-prepare("SELECT * FROM states WHERE country_id = :id");
//		$sql->execute(['id' => $id]);
//		if($sql->rowCount() === 0){
//			return null;
//		}
//		return $sql->fetch(PDO::FETCH_ASSOC);
//	}

	public function getNewAddress ($request, $response) {
		return $this->view->render($response, 'hr/newAddress.twig');
	}

	public function postNewAddress ($request, $response) {

	}

	public function getCountries ($request, $response) {
		return $this->view->render($response, 'partials/countries.twig');
	}

	public function getStates ($request, $response, $arg) {
		return $this->view->render($response, 'partials/states.twig', $arg);
	}

	public function getCities ($request, $response, $arg) {
		return $this->view->render($response, 'partials/cities.twig', $arg);
	}

	public function stateByCountry ($request, $response, $arg) {
		$states = State::all()->where('country_id', $arg['country_id']);
		return $response->withJson($states);
	}

	public function cityByState ($request, $response, $arg) {
		$cities = City::all()->where('state_id', $arg['state_id']);
		return $response->withJson($cities);
	}

}
