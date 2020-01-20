<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcurablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurables', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->BigInteger('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('procurable_types')->onDelete('cascade');
            
            $table->string('procurable');
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
        Schema::dropIfExists('procurables');
    }
}
