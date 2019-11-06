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
            // ma so nhan vien
            $table->bigInteger('employee_id');
            $table->double('price',20)->default(0);
            $table->unsignedInteger('amount')->default(0);
            $table->double('total',20)->default(0);
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
