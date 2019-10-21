<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RolePermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('role-permissions', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('role_id');
            $table->bigInteger('permission_id');
            $table->timestamps();
            $table->index(['user_id','role_id']);
            $table->foreign('role_id')->references('id')->on('roles');
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
        Schema::dropIfExists('role-permissions');
    }
}
