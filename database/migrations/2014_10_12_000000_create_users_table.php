<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('name')->nullable();
            $table->string('adress')->nullable();
            $table->string('phoneno');
            $table->string('creditcardinfo');
            $table->string('shippinginfo');


            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            
            $table->string('password');
            $table->integer('permission');
            $table->rememberToken();
            


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
        Schema::dropIfExists('users');
    }
}
