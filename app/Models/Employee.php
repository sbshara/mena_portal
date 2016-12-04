<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:17 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

	protected $table = 'employees';

	protected $fillable = [
		'applicant_id',
		'birth_place',
		'country_origin',
		'business_email',
		'created_at',
		'emergency_contact_name',
		'emergency_contact_number',
		'emp_ref',
		'extension',
		'father_name',
		'height',
		'hire_date',
		'marital_status',
		'middle_name',
		'mother_name',
		'religion',
		'updated_at',
		'visa_status',
		'weight'
	];
}
