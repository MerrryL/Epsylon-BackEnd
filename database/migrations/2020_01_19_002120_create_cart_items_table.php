<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->BigInteger('fk_product_id')->unsigned();
            $table->foreign('fk_product_id')->references('product_id')->on('products')->onDelete('cascade');

            $table->BigInteger('fk_shoppingcart_id')->unsigned();
            $table->foreign('fk_shoppingcart_id')->references('shoppingcart_id')->on('shopping_carts')->onDelete('cascade');
            
            $table->integer('quantity');
            $table->float('unitcost');
            $table->float('subtotal');
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
        Schema::dropIfExists('cart_items');
    }
}
