<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 9:41 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\City;

class Addresses extends Model {

	protected $table = 'addresses';

	protected $fillable = [
		'city_id',
		'address_title',
		'apartment',
		'area',
		'building_name',
		'building_no',
		'created_at',
		'floor',
		'landline1',
		'landline2',
		'landmark',
		'mobile1',
		'mobile2',
		'notes',
		'pobox',
		'street_name',
		'street_no',
		'updated_at'
	];




}
