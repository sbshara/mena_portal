<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 5:46 AM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

//	 Eloquent gets the plural of the class name and tries to match it to a table name
//	 if the table name is different, you can use the below:
//	protected $table = 'users';

	protected $fillable = [
		'email',
		'first_name',
		'last_name',
		'username',
		'password'
	];


	public function setPassword($password) {

		$this->update([
			'password'  =>  password_hash($password, PASSWORD_DEFAULT),
		]);
	}


}
