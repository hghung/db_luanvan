<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbBatdongsan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_batdongsan', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('dia_chi');
            $table->string('tinh_thanh');
            $table->double('vido');
            $table->double('kinhdo');
            $table->string('path_hinh');
            $table->string('qrcode');


            
            $table->integer('id_bantin')->unsigned();
            $table->foreign('id_bantin')
                    ->references('id')
                    ->on('db_bantin')
                    ->onDelete('cascade');

            $table->integer('id_loaibds')->unsigned();
            $table->foreign('id_loaibds')
                    ->references('id')
                    ->on('db_loaibds')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_batdongsan');
    }
}
