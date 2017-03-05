<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 9:38 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

	protected $table = 'applicants';

	protected $fillable = [
        'id',
		'first_name',
		'last_name',
		'birth_date',
		'gender',
		'nationality',
		'per_email',
		'mobile_phone',
		'prof_pic',
        'expectation',
		'source',
        'notice_period',
		'created_at',
		'updated_at'
	];

    public function fullName () {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function txtNationality () {
        $record = Country::find($this->nationality);
        return $record['country_name'];
    }

    public function applicantAddress () {
        return Addresses::find(
            ApplicantAddress::where('applicant_id', $this->id)
                ->get()['address_id']
        );
    }

    public function applicantDegree () {
        return ApplicantDegree::where('applicant_id', $this->id)->get();
    }

    public function applicantDocument () {
        return Document::find(
            ApplicantDocs::where('applicant_id', $this->id)
                ->get()['doc_id']
        );
    }

    public function applicantExperience () {
        return ApplicantExperience::where('applicant_id', $this->id)->get();
    }

    public function applicantSkills () {
        return Skill::find(
            ApplicantSkills::where('applicant_id', $this->id)
                ->get()['skill_id']
        );
    }

    public function applicantLanguages () {
        return Languages::find(
            ApplicantLanguage::where('applicant_id', $this->id)->get()['language_id']
        );
    }

    public function applicantVisa () {
        return VisaStatus::where('applicant_id', $this->id)->get();
    }

    public function applicantInterview () {
        return Interview::where('applicant_id', $this->id)->get();
    }





    public function applicantInterviews () {
//        $interview = Interview::where('applicant_id', $this->id)->get();
        $interviewer = Employee::where('id',
            InterviewInterviewer::where('interview_id',
                $interview->id)->get()['interviewer_id']
        )->get();
        $schedule = InterviewSchedule::where('id',
            Interview_schedule_mapping::where('interview_id',
                $interview->id
            )->get()['interview_schedule_id']
        )->get();


    }



}
