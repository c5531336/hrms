<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TempSalaryCalculation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TempSalaryCalculation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('EmployeeId');
            $table->integer('Month');
            $table->integer('Year');
            $table->double('TotalWorkingTime',20,5)->default(0);
            $table->double('TotalWorkingDay',20,5)->default(0);
            $table->double('RawSalaryByHours',20,5)->default(0);
            $table->double('RawSalaryByMonth',20,5)->default(0);
            $table->double('TotalProductSalary')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TempSalaryCalculation');
    }
}
