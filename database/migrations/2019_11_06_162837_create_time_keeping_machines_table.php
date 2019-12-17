<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeKeepingMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_keeping_machines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('EmployeeId')->default(0);
            $table->string('EmployeeFullName')->default('');
            $table->date('Date')->nullable();
            $table->time('checkin_1')->nullable();
            $table->time('checkout_1')->nullable();
            $table->time('checkin_2')->nullable();
            $table->time('checkout_2')->nullable();
            $table->time('checkin_3')->nullable();
            $table->time('checkout_3')->nullable();
            $table->integer('TimeShiftId')->default(0);
            $table->integer('DepartmentId')->default(0);
            $table->integer('Month')->default(0);
            $table->bigInteger('ProductCategoryId')->nullable();
            $table->bigInteger('ProductAmount')->nullable();
            $table->tinyInteger('absent')->default(0);
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
        Schema::dropIfExists('time_keeping_machines');
    }
}
