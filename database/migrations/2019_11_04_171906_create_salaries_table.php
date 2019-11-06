<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            // ma so nhan vien
            $table->bigInteger('employee_id');
            // ca hanh chinh thu viec ma X1
            $table->double('salary_hanh_chinh_x1',20)->default(0);
            // ca ngay thu viec ma a1
            $table->double('salary_ca_ngay_a1',20)->default(0);
            // ca dem thu viec ma e1
            $table->double('salary_ca_dem_e1',20)->default(0);
            // ca hanh chinh ma X
            $table->double('salary_hanhchinh_x',20)->default(0);
            // ca d4/d8
            $table->double('salary_d4_d8',20)->default(0);
            // ca dem ma e
            $table->double('salary_ca_dem_e',20)->default(0);
            // luong san pham
            $table->double('salary_san_pham',20)->default(0);
            // total
            $table->double('total_salary',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
