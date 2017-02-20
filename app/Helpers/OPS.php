<?php

namespace App\Helpers;

use App\Models\AssetsTrucks;
use App\Models\VehicleBrandModel;

class OPS {

    public function allBrands () {
        $allBrands = VehicleBrandModel::all()->unique('brand_name')->sortBy('brand_name');
        return $allBrands;
    }

    public function allVehicles () {
        $allVehicles = AssetsTrucks::all()->sortBy('registration_number')->sortBy('registration_code');
        return $allVehicles;
    }




}
