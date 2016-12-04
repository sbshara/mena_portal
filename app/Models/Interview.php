<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:19 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Interview extends Model {

	protected $table = 'interviews';

	protected $fillable = [
		'applicant_id',
		'interview_date',
		'inter_details',
		'inter_result',
		'created_at',
		'updated_at'
	];
}
