<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 10:59 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {

	protected $table = 'countries';

	protected $fillable = [
		'country_name',
		'a2_iso',
		'a3_un',
		'num_un',
		'dialing_code',
		'notes',
		'flag',
		'created_at',
		'updated_at'
	];
} 