<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 10:54 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Applicant;
use App\Models\Addresses;


class ApplicantAddress extends Model {

	protected $table = 'applicants_addresses';

	protected $fillable = [
		'applicant_id',
		'address_id'
	];


} 