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
		'first_name',
		'last_name',
		'birth_date',
		'gender',
		'nationality',
		'per_email',
		'mobile_phone',
		'prof_pic',
		'source',
		'created_at',
		'updated_at'
	];

	public function applicantById ($id) {
		return Applicant::find($id)->first();
	}

}
