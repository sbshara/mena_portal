<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 2/16/17
 * Time: 1:43 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class AssetsTrucks extends Model {

    protected $table = 'assets_trucks';

    protected $fillable = [
        'id',
        'vin',
        'registration_code',
        'registration_number',
        'registration_date_start',
        'registration_date_end',
        'insurance_name',
        'insurance_date_start',
        'insurance_date_end',
        'model',
        'model_year',
        'warranty',
        'warranty_expiry_date',
        'warranty_expiry_mileage'
    ];

    public function nickName () {
        return strtoupper($this->registration_code) . '-' . $this->registration_number;
    }

    public function brandName () {
        $brand = VehicleBrandModel::find($this->model);
        return $brand['brand_name'];
    }

    public function modelName() {
        $model = VehicleBrandModel::find($this->model);
        return $model['model_name'];
    }

    public function brandModelYear () {
        return $this->model_year . " - " . $this->brandName() . " - " . $this->modelName();
    }

    public function images () {
        return TruckAttachments::where('truck_id', $this->id)->get();
    }

}
