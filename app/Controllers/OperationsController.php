<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 10:29 AM
 */

namespace App\Controllers;

use App\Models\AssetsTrucks;
use App\Models\VehicleBrandModel;
use Respect\Validation\Validator as v;
use App\Models\Guidelines;


class OperationsController extends Controller {

	public function getAllGuidelines ($request, $response, $args) {
        return $this->view->render($response, 'auth/Operations/Guidelines/allGuidelines.twig');
    }

    public function getNewGuideline ($request, $response, $args) {
        return $this->view->render($response, 'auth/Operations/Guidelines/newGuideline.twig');
    }

    public function getGuidelineByID ($request, $response, $args) {
        $guidelineID = $args['id'];
        $guideline = Guidelines::find($guidelineID);
        return $this->view->render($response, 'auth/Operations/Guidelines/GuidelineById.twig', compact('guideline'));
    }

    public function postNewGuideline ($request, $response, $args) {

    }

    public function getTMSDB ($request, $response, $args) {
        return $this->view->render($response, 'auth/Operations/TMS/Dashboard.twig');
    }


    // Assets & Resources
    public function getAssets ($request, $response, $args) {
        return $this->view->render($response, 'auth/Operations/Assets/assets.twig');
    }

    // Trucks
        // All Trucks
    public function getAllTrucks ($request, $response, $args) {
        return $this->view->render($response, 'auth/Operations/Assets/Trucks/AllTrucks.twig');
    }

        // New Truck
    public function getNewTruck ($request, $response, $args) {
        return $this->view->render($response, 'auth/Operations/Assets/Trucks/newTruck.twig');
    }

    public function postNewTruck ($request, $response, $args) {
        $validation = $this->validator->validate($request, [
            'vin'                       =>  v::notEmpty()->length(17,17,true)->alnum(),
            'brand'                     =>  v::notEmpty(),
            'model'                     =>  v::notEmpty(),
            'model_year'                =>  v::notEmpty()->numeric()->min(1990)->max(2099),
            'registration_code'         =>  v::alpha(),
            'registration_number'       =>  v::notEmpty()->numeric()->min(1)->max(99999),
            'first_registration'        =>  v::notBlank()->date('Y-m-d'),
            'registration_expiry'       =>  v::notBlank()->date('Y-m-d'),
            'insurance_company'         =>  v::notEmpty()->alnum(),
            'insurance_start_date'      =>  v::notBlank()->date('Y-m-d'),
            'insurance_expiry_date'     =>  v::notBlank()->date('Y-m-d')
        ]);
        if ($request->getParam('warranty_validity') == true) {
            $warranty_validation = $this->validator->validate($request, [
                'warranty_expiry_date'      => v::notBlank()->date('Y-m-d'),
                'warranty_expiry_mileage'   => v::notEmpty()->numeric()
            ]);
        }
        if(isset($warranty_validation)) {
            if ($validation->failed() || $warranty_validation->failed()) {
                $this->flash->addMessage('danger', 'There are errors in some fields, please check and try again!');
                return $response->withRedirect($this->router->pathFor('OPS.Assets.NewTruck'));
            }
        } else {
            if ($validation->failed()) {
                $this->flash->addMessage('danger', 'There are errors in some fields, please check and try again!');
                return $response->withRedirect($this->router->pathFor('OPS.Assets.NewTruck'));
            }
        }
        $truck = AssetsTrucks::create([
            'vin'                       =>  $request->getParam('vin'),
            'registration_code'         =>  $request->getParam('registration_code'),
            'registration_number'       =>  $request->getParam('registration_number'),
            'registration_date_start'   =>  $request->getParam('first_registration'),
            'registration_date_end'     =>  $request->getParam('registration_expiry'),
            'insurance_name'            =>  $request->getParam('insurance_company'),
            'insurance_date_start'      =>  $request->getParam('insurance_start_date'),
            'insurance_date_end'        =>  $request->getParam('insurance_expiry_date'),
            'model'                     =>  $request->getParam('model'),
            'model_year'                =>  $request->getParam('model_year'),
            'warranty'                  =>  $request->getParam('warranty_validity'),
            'warranty_expiry_date'      =>  $request->getParam('warranty_expiry_date'),
            'warranty_expiry_mileage'   =>  $request->getParam('warranty_expiry_mileage'),
        ]);
        $this->flash->addMessage('success', "Vehicle record was created successfully");
        return $response->withRedirect($this->router->pathFor('OPS.Assets.AllTrucks'));
    }

        // Truck By ID
    public function getTruckById ($request, $response, $args) {
        return $this->view->render($response, 'auth/Operations/Assets/Trucks/TruckById.twig');
    }

    public function postTruckById ($request, $response, $args) {
        //
    }
}
