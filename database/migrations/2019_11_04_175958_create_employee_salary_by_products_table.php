<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSalaryByProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_salary_by_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Month');
            $table->integer('Year');
            $table->bigInteger('EmployeeId');
            $table->integer('TotalProductMade')->default(0);
            $table->bigInteger('ProductCategoryId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_salary_by_products');
    }
}
