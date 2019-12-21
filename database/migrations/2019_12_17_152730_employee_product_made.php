<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeProductMade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EmployeeProductMade', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('EmployeeId')->default(0);
            $table->date('Date')->nullable();
            $table->integer('Month')->default(0);
            $table->integer('Year')->default(0);
            $table->bigInteger('ProductCategoryId')->nullable();
            $table->bigInteger('ProductAmount')->nullable();
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
        Schema::dropIfExists('EmployeeProductMade');
    }
}
