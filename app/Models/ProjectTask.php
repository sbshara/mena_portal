<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:31 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class ProjectTask extends Model {

	protected $table = 'projecttasks';

	protected $fillable = [
        'id',
        'name',
        'number',
        'type',
        'priority',
        'progress',
        'hours',
        'startdate',
        'enddate',
        'projectid',
		'created_at',
		'updated_at'
	];

}
