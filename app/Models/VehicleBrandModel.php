<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 2/16/17
 * Time: 1:43 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class VehicleBrandModel extends Model {

    protected $table = 'vehicle_brand_model';

    protected $fillable = [
        'brand_name',
        'model_name',
        'year'
    ];

}
