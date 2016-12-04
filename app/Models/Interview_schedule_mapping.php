<?php
/**
 * Created by PhpStorm.
 * User: shiblie.bshara
 * Date: 12/4/2016
 * Time: 3:22 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Interview_schedule_mapping extends Model {

    protected $table = 'interview_schedule_mapping';

    protected $fillable = [
        'interview_id',
        'interview_schedule_id'
    ];
}
