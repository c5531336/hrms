<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeProductMade extends Model
{



    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'EmployeeProductMade';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Date', 'EmployeeId', 'Month', 'ProductAmount', 'ProductCategoryId', 'Year'];

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
    protected $dates = ['Date'];

    /**
     * Relationship
     *
     */
    public function ProductCategory(){
        return $this->belongsTo(ProductCategory::class,'ProductCategoryId','ProductCategoryId');
    }
    public function Employee(){
        return $this->belongsTo(Employees::class,'EmployeeId','EmployeeId');
    }
}
