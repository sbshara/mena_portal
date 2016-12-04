<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 10:58 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\State;

class City extends Model {

	protected $table = 'cities';

	protected $fillable = [
		'state_id',
		'city_name',
		'dialing_code',
		'created_at',
		'updated_at'
	];
}
