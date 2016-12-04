<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:29 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;



class RoleUser extends Model {

	protected $table = 'role_user';

	protected $fillable = [
		'role_id',
		'user_id'
	];
}
