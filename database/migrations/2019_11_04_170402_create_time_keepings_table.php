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
            // ma so nhan vien
            $table->bigInteger('employee_id');
            /**
             * change to same format of import from machine
             */
//            $table->date('date')->nullable();
//            $table->time('checkin_1')->nullable();
//            $table->time('checkout_1')->nullable();
//            $table->time('checkin_2')->nullable();
//            $table->time('checkout_2')->nullable();
//            $table->time('checkin_3')->nullable();
//            $table->time('checkout_3')->nullable();
//            $table->tinyInteger('absent')->default(0);
            // ca hanh chinh thu viec ma X1
           /* $table->float('time_hanh_chinh_x1')->default(0);
            // ca ngay thu viec ma a1
            $table->float('time_ca_ngay_a1')->default(0);
            // ca dem thu viec ma e1
            $table->float('time_ca_dem_e1')->default(0);
            // ca hanh chinh ma X
            $table->float('time_hanhchinh_x')->default(0);
            // ca d4/d8
            $table->float('time_d4_d8')->default(0);
            // ca dem ma e
            $table->float('time_ca_dem_e')->default(0);
            // gio nghi hanh chinh
            $table->float('time_off_hanh_chinh')->default(0);
            // gio nghi ca ngay
            $table->float('time_off_ca_ngay')->default(0);
            // gop nghi ca dem
            $table->float('time_off_ca_dem')->default(0);
            // tang ca hc
            $table->float('time_plus_hanh_chinh')->default(0);
            // tang ca chu nhat
            $table->float('time_plus_cn')->default(0);
            // tong ngay cong
            $table->float('total_working_days')->default(0);*/
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
