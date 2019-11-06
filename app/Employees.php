<?php

namespace App;

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
    protected $fillable = ['employee_id', 'name', 'department', 'position', 'gender', 'start_working', 'end_working', 'social_insurance', 'probationary_salary', 'official_salary', 'allowance_gender_department', 'annual_day_off', 'created_at', 'updated_at'];

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
    protected $dates = ['start_working', 'end_working', 'created_at', 'updated_at'];

}
