<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:31 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Role extends Model {

	protected $table = 'roles';

	protected $fillable = [
		'title',
		'created_at',
		'updated_at'
	];

}
