<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class EmployeeLevel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EmployeeLevel', function (Blueprint $table) {
            $table->bigIncrements('EmployeeLevelId');
            $table->string('Name');
            $table->integer('Level');
            $table->string('Location');
            $table->string('Block');
            $table->double('BasicSalary',15,4)->default(0);
            $table->integer('BasicSalaryRate')->default(0);
            $table->double('BasicFoodAllowance',15,4)->default(730000);
            $table->double('BasicFuelAllowance',15,4)->default(0);
            $table->double('BasicHouseholdAllowance',15,4)->default(0);
            $table->double('BasicAllowanceRate',15,4)->default(0);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EmployeeLevel');
    }
}
