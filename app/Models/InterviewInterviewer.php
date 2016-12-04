<?php
/**
 * Created by PhpStorm.
 * User: shiblie.bshara
 * Date: 12/4/2016
 * Time: 3:19 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class InterviewInterviewer extends Model {

    protected $table = 'interview_interviewer';

    protected $fillable = [
        'interview_id',
        'interviewer_id'
    ];
}
