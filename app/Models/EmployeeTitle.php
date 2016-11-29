<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:15 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Employee;
use App\Models\Title;

class EmployeeTitle extends Model {

	protected $table = 'emp_title';

	protected $fillable = [
		'emp_id',
		'title_id',
		'from_date',
		'to_date',
		'created_at',
		'updated_at'
	];

} 