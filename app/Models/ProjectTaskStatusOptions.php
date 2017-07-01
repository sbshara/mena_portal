<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:31 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class ProjectTaskStatusOptions extends Model {

	protected $table = 'projecttaskstatus_optns';

	protected $fillable = [
        'id',
		'statusname',
		'visibility'
	];

}
