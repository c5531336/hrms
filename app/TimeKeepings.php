<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeKeepings extends Model  
{

    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'time_keepings';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['employee_id', 'time_hanh_chinh_x1', 'time_ca_ngay_a1', 'time_ca_dem_e1', 'time_hanhchinh_x', 'time_d4_d8', 'time_ca_dem_e', 'time_off_hanh_chinh', 'time_off_ca_ngay', 'time_off_ca_dem', 'time_plus_hanh_chinh', 'time_plus_cn', 'total_working_days'];

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
