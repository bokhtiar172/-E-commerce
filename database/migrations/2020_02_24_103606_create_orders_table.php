<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('ip_address');
            $table->string('reciver_name');
            $table->string('reciver_phone');
            $table->string('reciver_email');
            $table->string('reciver_shipping_address');
            $table->string('message');
            $table->string('payment_id');
            $table->string('code');
            $table->string('is_paid')->default(0);
            $table->string('is_complate')->default(0);
            $table->string('date');
            $table->string('month');
            $table->string('year');
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
        Schema::dropIfExists('orders');
    }
}
