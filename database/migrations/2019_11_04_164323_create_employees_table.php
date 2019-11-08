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
            $table->string('name');
            $table->string('department');
            $table->string('position');
            $table->enum('gender',['Name','Nữ']);
            $table->date('start_working')->nullable();
            $table->date('end_working')->nullable();
            $table->double('social_insurance',20)->default(0);
            $table->double('probationary_salary',20)->default(0);
            $table->double('official_salary',20)->default(0);
            $table->double('allowance_gender_department',20)->default(0);
            $table->unsignedInteger('annual_day_off')->default(12);
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
        Schema::dropIfExists('employees');
    }
}
