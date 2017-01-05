<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 1/3/17
 * Time: 2:58 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantLanguage extends Model {

    protected $table = 'applicant_language';

    protected $fillable = [
        'applicant_id',
        'language_id',
        'created_at',
        'updated_at'
    ];




}
