<?php
/**
 * Created by PhpStorm.
 * User: shiblie.bshara
 * Date: 12/4/2016
 * Time: 3:24 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model {

    protected $table = 'leavetypes';

    protected $fillable = [
        'leave_type',
        'leave_notes'
    ];

}
