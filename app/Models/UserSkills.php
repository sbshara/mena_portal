<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/14/16
 * Time: 12:32 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSkills extends Model {

	protected $table = 'user_skills';

	protected $fillable = [
		'userprofile_id',
		'skill_name'
	];
}
