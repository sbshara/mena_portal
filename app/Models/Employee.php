<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:17 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Applicant;

class Employee extends Model {

	protected $table = 'employees';

	protected $fillable = [
		'emp_ref',
		'applicant_id',
		'hire_date',
		'extension',
		'business_email',
		'created_at',
		'updated_at'
	];
} 