<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbLichsu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_lichsu', function (Blueprint $table) {
            $table->Increments('id');
            $table->dateTime('thoigian_batdau');
            $table->dateTime('thoigian_ketthuc');

            $table->integer('id_phuongthuc')->unsigned();
            $table->foreign('id_phuongthuc')
                    ->references('id')
                    ->on('db_phuongthucthanhtoan')
                    ->onDelete('cascade');
            
            $table->integer('id_sanpham')->unsigned();
            $table->foreign('id_sanpham')
                    ->references('id')
                    ->on('db_sanpham')
                    ->onDelete('cascade');

            $table->integer('id_thanhvien')->unsigned();
            $table->foreign('id_thanhvien')
                    ->references('id')
                    ->on('db_thanhvien')
                    ->onDelete('cascade');
            
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
        Schema::dropIfExists('db_lichsu');
    }
}
