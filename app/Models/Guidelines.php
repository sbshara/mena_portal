<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 9:41 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Guidelines extends Model {

	protected $table = 'guidelines_articles';

	protected $fillable = [
        'subject',
        'body',
        'guideline_category',
        'created_by',
		'created_at',
		'updated_at'
	];




}
