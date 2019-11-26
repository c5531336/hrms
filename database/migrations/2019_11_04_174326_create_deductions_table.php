<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deductions', function (Blueprint $table) {
            $table->bigIncrements('id');
            // ma so nhan vien
            $table->bigInteger('employee_id');
            //giam tru ban than
            $table->double('self_deductions',20)->default(0);
            // nguoi phu thuoc
            $table->double('amount_of_dependencies',20)->default(0);
            $table->double('individual_tax',20)->default(0);
            $table->double('BHXH',20)->default(0);
            $table->double('TNCN',20)->default(0);
            $table->double('foods',20)->default(0);
            // ung luong
            $table->double('salary_advance',20)->default(0);
            // boi thuong thiet hai
            $table->double('indemnify_damages',20)->default(0);
            $table->double('uniform',20)->default(0);
            $table->double('off_time',20)->default(0);
            $table->double('total_deductions',20)->default(0);
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
        Schema::dropIfExists('deductions');
    }
}
