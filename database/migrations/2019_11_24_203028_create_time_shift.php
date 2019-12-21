<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeShift extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TimeShift', function (Blueprint $table) {
            $table->increments('TimeShiftId');
            $table->integer('BranchId');
            $table->string('Name');
            $table->integer('MinHourForFoodAllowance')->default(0);
            $table->double('StandardWorkingTime', 20, 2)->default(0);
            $table->double('FoodAllowance', 20, 2)->default(0);
            $table->double('TimeAllowance', 20, 2)->default(0);
            $table->timestamps();
            $table->index('TimeShiftId','BranchId');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TimeShift');
    }
}
