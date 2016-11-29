<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:10 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Employee;
use App\Models\Benefit;

class EmployeeBenefit extends Model {

	protected $table = 'emp_benefits';

	protected $fillable = [
		'emp_id',
		'benefit_id',
		'received_at',
		'reason',
		'created_at',
		'updated_at'
	];
} 