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
		'degree',
		'acquired_date',
		'acquired_from',
		'city_id',
		'created_at',
		'updated_at'
	];



} 