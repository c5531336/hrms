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
            $table->string('employee_id')->default('');
            $table->string('employee_name')->default('');
            $table->date('date')->nullable();
            $table->time('checkin_1')->nullable();
            $table->time('checkout_1')->nullable();
            $table->time('checkin_2')->nullable();
            $table->time('checkout_2')->nullable();
            $table->time('checkin_3')->nullable();
            $table->time('checkout_3')->nullable();
            $table->integer('shiftType')->default(0);
            $table->integer('departmentId')->default(0);
            $table->text('ProductCode')->nullable();
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
