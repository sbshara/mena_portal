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

}
