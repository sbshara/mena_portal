<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:31 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class ProjectTaskTypesOptions extends Model {

	protected $table = 'projecttasktype_optns';

	protected $fillable = [
        'id',
		'typename',
		'visibility'
	];

}
