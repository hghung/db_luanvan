<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbCtThuoctinh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_ct_thuoctinh', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_thuoctinh')->unsigned();
            $table->foreign('id_thuoctinh')
                    ->references('id')
                    ->on('db_thuoctinh')
                    ->onDelete('cascade');

            $table->integer('id_batdongsan')->unsigned();
            $table->foreign('id_batdongsan')
                    ->references('id')
                    ->on('db_batdongsan')
                    ->onDelete('cascade');
                    
            $table->string('mo_ta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_ct_thuoctinh');
    }
}
