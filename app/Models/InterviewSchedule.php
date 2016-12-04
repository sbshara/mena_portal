<?php
/**
 * Created by PhpStorm.
 * User: shiblie.bshara
 * Date: 12/4/2016
 * Time: 3:20 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class InterviewSchedule extends Model {


    protected $table = 'interview_schedule';

    protected $fillable = [
        'scheduled_by',
        'created_at',
        'occurance_details',
        'occurred',
        'schedule_date',
        'schedule_notes',
        'updated_at'
    ];
}
