<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:34 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Skill extends Model {

	protected $table = 'skills';

	protected $fillable = [
		'skill_name',
		'skill_desc',
		'created_at',
		'updated_at'
	];
} 