<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_sanpham', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('sanpham_ten');
            $table->string('slug')->nullable();
            $table->text('sanpham_motangan');
            $table->integer('sanpham_gia');
            $table->string('sanpham_path');
            $table->integer('sanpham_hsd');

            $table->integer('id_trangthai')->unsigned();
            $table->foreign('id_trangthai')
                    ->references('id')
                    ->on('db_trangthai')
                    ->onDelete('cascade');


            $table->softDeletes();
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
        Schema::dropIfExists('db_sanpham');
    }
}
