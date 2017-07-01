<?php

namespace App\Helpers;

use App\Models\AssetsTrucks;
use App\Models\GuidelinesCategories;
use App\Models\ProjectProgressOptions;
use App\Models\ProjectStatusOptions;
use App\Models\VehicleBrandModel;

class OPS {

    public function allBrands () {
        return VehicleBrandModel::all()->unique('brand_name')->sortBy('brand_name');
    }

    public function allVehicles () {
        return AssetsTrucks::all()->sortBy('registration_number')->sortBy('registration_code');
    }

    public function allCategories () {
        return GuidelinesCategories::all()->sortBy('category');
    }

    public function allProjectStatus () {
        return ProjectStatusOptions::all()->where('visibility', 1)->sortBy('sortindex');
    }

    public function projectProgress () {
        return ProjectProgressOptions::all()->where('visibility', 1);
    }




}
