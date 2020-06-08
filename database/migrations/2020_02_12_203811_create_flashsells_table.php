<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlashsellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flashsells', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('flashsell_product_name');
            $table->string('flashsell_product_image');
            $table->string('flashsell_product_description');
            $table->integer('flashsell_product_original_price');
            $table->integer('flashsell_product_parcentage');
            $table->integer('flashsell_product_parcentage_price')->nullable();
            $table->integer('flashsell_product_status');

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
        Schema::dropIfExists('flashsells');
    }
}
