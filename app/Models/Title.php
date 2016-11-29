<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:36 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model {

	protected $table = 'titles';

	protected $fillable = [
		'title',
		'description',
		'created_at',
		'updated_at'
	];
} 