<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:02 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Department extends Model {

	protected $table = 'departments';

	protected $fillable = [
		'dept_name',
		'created_at',
		'updated_at'
	];

} 