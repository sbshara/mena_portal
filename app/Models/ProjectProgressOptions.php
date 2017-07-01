<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:31 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class ProjectProgressOptions extends Model {

	protected $table = 'projectprogress_optns';

	protected $fillable = [
        'id',
        'progressname',
        'visibility'
	];

}
