<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 2/16/17
 * Time: 1:43 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class VehicleService extends Model {

    protected $table = 'vehicle_services';

    protected $fillable = [
        'id',
        'truck_id',
        'guidelines_category_id',
        'service_mileage',
        'user_id',
        'service_details',
        'cost',
        'service_date_start',
        'service_date_end',
        'created_at',
        'updated_at'
    ];

    // returns String (Truck NickName)
    public function vehicleName () {
        return AssetsTrucks::find($this->truck_id)->nickName();
    }

    // returns String (Category Name)
    public function categoryName () {
        return GuidelinesCategories::find($this->guidelines_category_id)['category'];
    }

    // returns String (User Name)
    public function serviceUser () {
        return Applicant::where('id',
            Employee::where('id',
                User::where('id',
                    $this->user_id)
                    ->get()['emp_id']
            )->get()['applicant_id']
        )->get()->fullName();
    }

}
