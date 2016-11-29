<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:25 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Permission extends Model {

	protected $table = 'permissions';

	protected $fillable = [
		'module',
		'title',
		'funcs',
		'created_at',
		'updated_at'
	];

} 