<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TempSalaryCalculation extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'TempSalaryCalculation';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'EmployeeId',
        'Month',
        'Year',
        'RawSalaryByHours',
        'RawSalaryByMonth',
        'RawSalaryByOverTime',
        'RawFoodAllowance',
        'RawTimeAllowance',
        'RawDepartmentAllowance',
        'TotalProductSalary',
        'TotalWorkingDay',
        'TotalWorkingTime',
        'TotalOverTime',
        'created_at',
        'updated_at',

    ];

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
    public function Employee(){
        return $this->belongsTo(Employees::class,'EmployeeId','EmployeeId');
    }
}
