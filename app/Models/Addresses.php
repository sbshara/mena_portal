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
		'addres_title',
		'city_id',
		'area',
		'street_name',
		'street_no',
		'building_name',
		'building_no',
		'floor',
		'apartment',
		'pobox',
		'landmark',
		'landline1',
		'landline2',
		'mobile1',
		'mobile2',
		'notes',
		'created_at',
		'updated_at'
	];




} 