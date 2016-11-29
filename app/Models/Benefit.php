<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 10:56 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Benefit extends Model {


	protected $table = 'benefits';

	protected $fillable = [
		'benefit_name',
		'description',
		'created_at',
		'updated_at'
	];
} 