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
            $table->bigIncrements('id'); // ko quan tâm đến cột này nữa
            $table->string('employee_id')->default('');
            $table->integer('BranchId');
            $table->string('name');
            $table->string('department');
            $table->bigInteger('EmployeeLevelId');
            $table->enum('gender',['Name','Nữ']);
            $table->double('basicSalary',20,2)->default(0);
            $table->double('probationarySalary')->default(0);
            $table->integer('probationTime')->default(0);
            $table->tinyInteger('isProbation')->default(0);

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
        Schema::dropIfExists('employees');
    }
}
