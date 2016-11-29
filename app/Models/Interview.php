<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:19 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Applicant;
use App\Models\User;

class Interview extends Model {

	protected $table = 'interviews';

	protected $fillable = [
		'applicant_id',
		'scheduled',
		'sched_by',
		'sched_notes',
		'interview_date',
		'inter_notes',
		'inter_result',
		'created_at',
		'updated_at'
	];
} 