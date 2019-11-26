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
            $table->string('Name');
            $table->double('FoodAllowance', 20, 2)->default(0);
            $table->double('TimeAllowance', 20, 2)->default(0);
            $table->timestamps();
            $table->index('TimeShiftId');
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