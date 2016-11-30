<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/8/16
 * Time: 5:46 AM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Employee;

class User extends Model {

//	 Eloquent gets the plural of the class name and tries to match it to a table name
//	 if the table name is different, you can use the below:
	protected $table = 'users';

	protected $fillable = [
		'emp_id',
		'username',
		'password',
		'active',
		'active_hash',
		'recover_hash',
		'remember_identifier',
		'remember_token',
		'created_at',
		'updated_at'
	];


	public function setPassword($password) {

		$this->update([
			'password'  =>  password_hash($password, PASSWORD_DEFAULT),
		]);
	}



	public function hash($input){

	}

	public function verifyHash($existing, $input){

	}



}
