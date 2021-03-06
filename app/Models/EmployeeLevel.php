<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeLevel extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'EmployeeLevel';
    protected $primaryKey = 'EmployeeLevelId';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Name',
        'Level',
        'BranchId',
        'Code',
        'BasicSalaryByHour',
        'BasicSalaryByMonth',
        'BasicSalaryRate',
        'BasicFoodAllowance',
        'BasicFuelAllowance',
        'BasicHouseholdAllowance',
        'BasicAllowanceRate',
        'BasicPhoneAllowance',
        'BasicResponseAllowance',
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

    /**
     * Relation Ship
     */
    public function belongedBranch()
    {
        return $this->belongsTo(Branch::class, 'BranchId', 'BranchId');
    }
}
