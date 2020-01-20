<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('image_id');
            $table->BigInteger('fk_product_id')->unsigned();
            $table->foreign('fk_product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->string('path');
            $table->string('name');
            $table->string('extension');
            $table->integer('position');
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
        Schema::dropIfExists('images');
    }
}
// Illuminate/Database/QueryException with message 
// 'SQLSTATE[22007]: Invalid datetime format: 1366 Incorrect integer value: '
// [{"productname":"ab","description":"Est et rem recusandae ut ipsam voluptatem iure.","productprice":52.78,"availabilitystatus":f'
//  for column `epsylon`.`images`.`product_id` at row 1 
//  (SQL: insert into `images` (`product_id`, `path`, `name`, `extension`, `position`, `updated_at`, `created_at`) values 
//  ([{"productname":"ab","description":"Est et rem recusandae ut ipsam voluptatem iure.","productprice":52.78,"availabilitystatus":false,
// "hidden":true,"updated_at":"2020-01-20 00:28:37",
// "created_at":"2020-01-20 00:28:37","id":1}]
// , storage/app/public, 01, jpg, 6, 2020-01-20 00:28:37, 2020-01-20 00:28:37))'