<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->string('product_title');
            $table->string('product_image');
            $table->integer('product_price');
            $table->string('product_description');
            $table->string('product_size')->nullable();
            $table->string('product_weight')->nullable();
            $table->integer('product_status');
            $table->integer('product_parcentage')->nullable();
            $table->integer('product_parcentage_price')->nullable();
            $table->integer('product_role_id');
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
        Schema::dropIfExists('products');
    }
}
