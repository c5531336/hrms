<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductCategory', function (Blueprint $table) {
            $table->bigIncrements('ProductCategoryId');
            $table->string('ProductCode');
            $table->string('Name');
            $table->double('Price')->default(0);
            $table->string('unit')->nullable();
            $table->index(['ProductCategoryId','ProductCode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProductCategory');
    }
}
