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
            $table->integer('BranchId');
            $table->string('Name');
            $table->integer('ParentDepartmentId')->default(0);
            $table->string('DepartmentCode');
            $table->text('Description')->nullable();
            $table->double('Allowance')->default(0);
            $table->timestamps();
            $table->index(['DepartmentId','ParentDepartmentId']);
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
