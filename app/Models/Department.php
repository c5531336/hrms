<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Department';
    protected $primaryKey='DepartmentId';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['BranchId', 'Name', 'ParentDepartmentId', 'DepartmentCode', 'Description', 'Allowance'];

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
    protected $dates = [];
    public $timestamps=false;
    /**
     * Define Scope
     */
    /**
     * Define Relationship
     */
    public function belongedBranch(){
        return $this->belongsTo(Branch::class,'BranchId','BranchId');
    }
    public function belongedDepartment(){
        return $this->belongsTo(Department::class,'ParentDepartmentId','DepartmentId');
    }
    public function hasDependDepartments(){
        return $this->hasMany(Department::class,'ParentDepartmentId','DepartmentId');
    }
}
