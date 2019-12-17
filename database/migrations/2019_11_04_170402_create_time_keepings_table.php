<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeKeepingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_keepings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('EmployeeId');
            $table->integer('Month');
            $table->integer('Year');
            $table->double('TotalWorkingTime')->default(0);
            $table->integer('TotalAbsentDays')->default(0);
            $table->integer('TotalProductMade')->default(0);
            $table->bigInteger('ProductCategoryId')->nullable();
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
        Schema::dropIfExists('time_keepings');
    }
}
