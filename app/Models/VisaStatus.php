<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 9:41 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class VisaStatus extends Model {

	protected $table = 'visa_status';

	protected $fillable = [
		'applicant_id',
        'visa_type',
        'file_number',
        'sponsor',
        'issue_date',
        'expiry_date',
        'visa_age',
		'created_at',
		'updated_at'
	];


}
