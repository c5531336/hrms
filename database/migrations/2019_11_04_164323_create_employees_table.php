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
            $table->integer('probationTime')->default(0);
            $table->tinyInteger('isProbation')->default(0);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
