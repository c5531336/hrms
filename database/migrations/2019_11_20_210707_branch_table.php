<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Branch', function (Blueprint $table) {
            $table->increments('BranchId');
            $table->string('BranchCode',10);
            $table->text('Name');
            $table->text('Description')->nullable();
            $table->index(['BranchId','BranchCode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Branch');
    }
}
