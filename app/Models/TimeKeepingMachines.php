<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeKeepingMachines extends Model
{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'time_keeping_machines';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['EmployeeId', 'EmployeeFullName', 'date', 'checkin_1', 'checkout_1', 'checkin_2', 'checkout_2', 'checkin_3', 'checkout_3', 'TimeShift_1','TimeShift_2', 'TimeShift_3',  'DepartmentId', 'ProductCategoryId', 'absent', 'created_at', 'updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date', 'created_at', 'updated_at'];
    public function Branch(){
        return $this->belongsTo(Branch::class,'BranchId');
    }
    public function Department1(){
        return $this->belongsTo(Department::class,'DepartmentId_1');
    }
    public function TimeShift1(){
        return $this->belongsTo(TimeShift::class,'TimeShiftId_1');
    }
    public function Department2(){
        return $this->belongsTo(Department::class,'DepartmentId_2');
    }
    public function TimeShift2(){
        return $this->belongsTo(TimeShift::class,'TimeShiftId_2');
    }
    public function Department3(){
        return $this->belongsTo(Department::class,'DepartmentId_3');
    }
    public function TimeShift3(){
        return $this->belongsTo(TimeShift::class,'TimeShiftId_3');
    }
    public function EmployeeLevel(){
        return $this->hasOneThrough(EmployeeLevel::class,Employees::class,'EmployeeId','EmployeeLevelId','EmployeeId','EmployeeLevelId');
    }
}
