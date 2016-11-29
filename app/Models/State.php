<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:35 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Country;

class State extends Model {

	protected $table = 'states';

	protected $fillable = [
		'country_id',
		'state_name',
		'created_at',
		'updated_at'
	];
} 