<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 10:38 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Applicant;
use App\Models\Skills;

class ApplicantSkills extends Model {

	protected $table = 'applicant_skills';

	protected $fillable = [
		'applicant_id',
		'skill_id'
	];

} 