<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 5:46 AM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserMaster extends Model {


	protected $table = 'usermaster';

	protected $fillable = [
		'active',
		'active_hash',
		'u_created_at',
		'u_updated_at',
		'u_emp_id',
		'u_id',
		'password',
		'recover_hash',
		'remembere_identifier',
		'remembere_token',
		'username',
		'e_id',
		'e_applicant_id',
		'birth_place',
		'country_origin',
		'business_email',
		'e_created_at',
		'e_updated_at',
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
		'visa_status',
		'weight',
		'a_id',
		'birth_date',
		'a_created_at',
		'a_updated_at',
		'first_name',
		'last_name',
		'gender',
		'mobile_phone',
		'nationality',
		'per_email',
		'prof_pic',
		'source'
	];




}
