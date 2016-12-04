<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/29/16
 * Time: 8:44 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use App\Models\Applicant;

class ApplicantDocs extends Model {

	protected $table = 'applicant_docs';

	protected $fillable = [
		'applicant_id',
		'doc_id',
		'created_at',
		'updated_at'
	];
}
