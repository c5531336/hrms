<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllowancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allowances', function (Blueprint $table) {
            $table->bigIncrements('id');
            // ma so nhan vien
            $table->bigInteger('employee_id');
            $table->double('responsibility',20)->default(0);
            $table->double('production',20)->default(0);
            $table->double('foods',20)->default(0);
            $table->double('fuel',20)->default(0);
            $table->double('household',20)->default(0);
            $table->double('phone_billing',20)->default(0);
            $table->double('other_allowances',20)->default(0);
            $table->double('productivity_reward',20)->default(0);
            $table->double('extra_salary',20)->default(0);
            $table->double('total_allowances',20)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allowances');
    }
}
