<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:32 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Employee;

class Salary extends Model {

	protected $table = 'salaries';

	protected $fillable = [
		'emp_id',
		'salary',
		'basic',
		'housing',
		'transport',
		'from_date',
		'to_date',
		'created_at',
		'updated_at'
	];
} 