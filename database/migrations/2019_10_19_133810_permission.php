<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Permission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('permissions', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('role_id');
            $table->boolean('read')->default(false);
            $table->boolean('write')->default(false);
            $table->boolean('update')->default(false);
            $table->boolean('create')->default(false);
            $table->timestamps();
            $table->index(['role_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('permissions');
    }
}
