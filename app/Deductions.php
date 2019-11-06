<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deductions extends Model  
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'deductions';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['employee_id', 'self_deductions', 'amount_of_dependencies', 'individual_tax', 'BHXH', 'TNCN', 'foods', 'salary_advance', 'indemnify_damages', 'uniform', 'off_time', 'total_deductions'];

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

}
