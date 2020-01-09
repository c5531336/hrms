<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('EmployeeId');
            $table->integer('BranchId');
            $table->string('FullName');
            $table->integer('DepartmentId');
            $table->bigInteger('EmployeeLevelId');
            $table->enum('gender',['Nam','Nữ']);
            $table->integer('IncreaseSalaryRate')->default(0);
            $table->integer('IncreaseAllowanceRate')->default(0);
            $table->date('StartWorkingDate')->nullable();
            $table->date('EndWorking')->nullable();
            $table->integer('probationTime')->default(0);
            $table->tinyInteger('isProbation')->default(0);
            $table->tinyInteger('isLeader')->default(0);
            $table->tinyInteger('AllowOverTime')->default(1);
            $table->timestamps();
        });
//        DB::update('ALTER TABLE employees AUTO_INCREMENT = 3000;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
