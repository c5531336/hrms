<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salaries extends Model  
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'salaries';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['employee_id', 'salary_hanh_chinh_x1', 'salary_ca_ngay_a1', 'salary_ca_dem_e1', 'salary_hanhchinh_x', 'salary_d4_d8', 'salary_ca_dem_e', 'salary_san_pham', 'total_salary'];

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
