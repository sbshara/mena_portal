<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:22 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Leave extends Model {

	protected $table = 'leaves';

	protected $fillable = [
		'leave_name',
		'leave_desc',
		'created_at',
		'updated_at'
	];
} 