<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:12 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Employee;
use App\Models\Leave;

class EmployeeLeave extends Model {

	protected $table = 'emp_leaves';

	protected $fillable = [
		'emp_id',
		'from_date',
		'to_date',
		'leave_type',
		'created_at',
		'updated_at'
	];
} 