<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';
    protected $primaryKey='EmployeeId';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['EmployeeId','basicSalary', 'BranchId', 'created_at', 'DepartmentId', 'EmployeeLevelId', 'FullName', 'gender', 'isProbation', 'probationarySalary', 'probationTime', 'updated_at',
        'AllowOverTime'];

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
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Relationship
     */
    public function Branch(){
        return $this->belongsTo(Branch::class,'BranchId');
    }
    public function Department(){
        return $this->belongsto(Department::class,'DepartmentId');
    }
}
