<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 9:44 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Applicant;
use App\Models\City;

class ApplicantDegree extends Model {

	protected $table = 'applicant_degree';

	protected $fillable = [
		'applicant_id',
		'city_id',
		'acquired_date',
		'created_at',
		'degree',
		'institute_name',
		'updated_at'
	];



}
