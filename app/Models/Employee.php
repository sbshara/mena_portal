<?php
/**
 * Created by PhpStorm.
 * User: shiblie
 * Date: 11/25/16
 * Time: 11:17 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

	protected $table = 'employees';

	protected $fillable = [
        'id',
		'applicant_id',
		'birth_place',
		'country_origin',
		'business_email',
		'created_at',
		'emergency_contact_name',
		'emergency_contact_number',
		'emp_ref',
		'extension',
		'father_name',
		'height',
		'hire_date',
		'marital_status',
		'middle_name',
		'mother_name',
		'religion',
		'updated_at',
		'visa_status',
		'weight'
	];

    public function employeeSalary () {
        return Salary::find($this->id);
    }


    public function benifitName () {
        return Benefit::find($this->employeeSalary()->benefit_id)['benefit_name'];
    }

    public function employeeDepartment () {
        return Department::find(
            DepartmentEmployee::where('emp_id', $this->id)
                ->latest('from_date')
                ->get()['dept_no'])['dept_name'];
    }

    public function employeeLeave () {
        return EmployeeLeave::where('emp_id', $this->id)->get();
    }

    public function leaveType () {
        return LeaveType::find($this->employeeLeave()['leave_type'])['leave_type'];
    }

    public function employeeTitle () {
        return EmployeeTitle::where('emp_id', $this->id)->latest('from_date')->get();
    }

    public function title () {
        return Title::find($this->employeeTitle()['title_id'])['title'];
    }



}
