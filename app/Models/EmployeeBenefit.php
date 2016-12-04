<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:10 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class EmployeeBenefit extends Model {

	protected $table = 'emp_benefits';

	protected $fillable = [
		'emp_id',
		'benefit_id',
		'created_at',
		'updated_at'
	];
}
