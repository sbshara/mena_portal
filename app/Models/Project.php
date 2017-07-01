<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:31 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Project extends Model {

	protected $table = 'projects';

	protected $fillable = [
        'id',
        'name',
        'shortname',
        'number',
        'description',
        'startdate',
        'targetenddate',
        'actualenddate',
        'targetbudget',
        'status',
        'priority',
        'type',
        'progress',
		'created_at',
		'updated_at'
	];

	public function projectProgress() {
	    return ProjectProgressOptions::where('id', $this->progress)->first()->progressname;
    }

	public function taskCount() {
	    return ProjectTask::where('projectid', $this->id)->count();
    }

}
