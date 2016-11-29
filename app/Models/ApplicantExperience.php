<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 10:36 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Applicant;
use App\Models\City;

class ApplicantExperience extends Model {

	protected $table = 'applicant_experience';

	protected $fillable =[
		'applicant_id',
		'city_id',
		'title',
		'company',
		'details',
		'from_date',
		'to_date',
		'created_at',
		'updated_at'
	];







} 