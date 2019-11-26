<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Department', function (Blueprint $table) {
            $table->increments('DepartmentId');
            $table->string('Name');
            $table->integer('ParentDepartmentID')->default(0);
            $table->string('DepartmentCode');
            $table->text('Description')->nullable();
            $table->double('Allowance')->default(0);
            $table->index(['DepartmentId','ParentDepartmentID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Department');
    }
}
