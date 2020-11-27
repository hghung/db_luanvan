<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbHinhanh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_hinhanh', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_batdongsan')->unsigned();
            $table->foreign('id_batdongsan')
                    ->references('id')
                    ->on('db_batdongsan')
                    ->onDelete('cascade');
                    
            $table->string('path');
            $table->text('mo_ta')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_hinhanh');
    }
}
