<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('order_id');
            $table->timestamp('dateshipped')->nullable();
            

            $table->BigInteger('fk_user_id')->unsigned();
            $table->foreign('fk_user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('customername');

            $table->BigInteger('fk_shipping_id')->unsigned();
            $table->foreign('fk_shipping_id')->references('shipping_id')->on('shipping_infos')->onDelete('cascade');


            $table->string('status');

            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
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
