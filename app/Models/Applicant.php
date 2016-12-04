<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 9:38 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

	protected $table = 'applicants';

	protected $fillable = [
		'birth_date',
		'created_at',
		'first_name',
		'gender',
		'last_name',
		'mobile_phone',
		'nationality',
		'per_email',
		'prof_pic',
		'source',
		'updated_at'
	];


}
