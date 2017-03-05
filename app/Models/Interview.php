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
        'id',
		'applicant_id',
		'interview_date',
		'inter_details',
		'inter_result',
		'created_at',
		'updated_at'
	];

    // gets the applicant's Full Name of the interviewer
    public function Interviewer () {
        return Applicant::where('id',
            Employee::where('id',
                InterviewInterviewer::where('interview_id',
                    $this->id)->get()['interviewer_id'])->get()['applicant_id']
        )->get()['fullName'];
    }

    // for every interview instance
    public function interviewSchedule () {
        return InterviewSchedule::where('id',
            Interview_schedule_mapping::where('interview_id',
                $this->id)
                ->get()['interview_schedule_id']
        )->get();
    }

    // Returns applicant record (returns Name)
    public function interviewScheduler () {
        return Applicant::where('id',
            Employee::where('id',
                $this->interviewSchedule()['scheduled_by'])->get()['applicant_id']
            )->get()['fullName'];
    }


}
