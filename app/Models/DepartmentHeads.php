<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:04 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DepartmentHeads extends Model {

	protected $table = 'dept_heads';

	protected $fillable = [
		'emp_id',
		'dept_id',
		'from_date',
		'to_date',
		'created_at',
		'updated_at'
	];
}
