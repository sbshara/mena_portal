<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 9:38 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

	protected $table = 'applicants';

	protected $fillable = [
		'first_name',
		'middle_name',
		'father_name',
		'last_name',
		'per_email',
		'mobile_phone',
		'gender',
		'birth_date',
		'prof_pic',
		'marital_status',
		'religion',
		'doc_loc',
		'source',
		'created_at',
		'updated_at'
	];


} 