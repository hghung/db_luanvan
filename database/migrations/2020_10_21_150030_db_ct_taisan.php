<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbCtTaisan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_ct_taisan', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_taisan')->unsigned();
            $table->foreign('id_taisan')
                    ->references('id')
                    ->on('db_taisan')
                    ->onDelete('cascade');

            $table->integer('id_batdongsan')->unsigned();
            $table->foreign('id_batdongsan')
                    ->references('id')
                    ->on('db_batdongsan')
                    ->onDelete('cascade');
                    
            $table->integer('so_luong');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_ct_taisan');
    }
}
