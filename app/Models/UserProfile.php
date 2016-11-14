<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/13/16
 * Time: 4:37 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UserProfile extends Model {

	protected $table = 'userprofiles';

	protected $fillable = [
		'user_id',
		'user_employee_id',
		'user_dob',
		'user_joining_date',
		'user_address_home',
		'user_address_local',
		'user_dept_id',
		'user_primary_phone',
		'user_business_phone',
		'user_business_extension',
		'user_profile_image',
		'user_notes'
	];

}
