<?php

namespace AppModels;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model  
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['basicSalary', 'BranchId', 'created_at', 'DepartmentId', 'employee_id', 'EmployeeLevelId', 'gender', 'isProbation', 'name', 'probationarySalary', 'probationTime', 'updated_at'];

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

}
