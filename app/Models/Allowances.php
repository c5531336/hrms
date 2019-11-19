<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allowances extends Model  
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'allowances';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['employee_id', 'responsibility', 'production', 'foods', 'fuel', 'household', 'phone_billing', 'other_allowances', 'productivity_reward', 'extra_salary', 'total_allowances'];

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
