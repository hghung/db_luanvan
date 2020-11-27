<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbDatlich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_datlich', function (Blueprint $table) {
            $table->id();
            $table->date('ngay_hen');
            $table->time('gio_hen');


            $table->text('noi_dung');

            $table->integer('id_trangthai');

            $table->dateTime('ngay_tao');
            $table->dateTime('cap_nhat')->nullable();
            
            $table->integer('id_bantin')->unsigned();
            $table->foreign('id_bantin')
                    ->references('id')
                    ->on('db_bantin')
                    ->onDelete('cascade');

            $table->integer('id_nguoidang')->unsigned();
            $table->foreign('id_nguoidang')
                    ->references('id')
                    ->on('db_thanhvien')
                    ->onDelete('cascade');

            $table->integer('id_khachhang')->unsigned();
            $table->foreign('id_khachhang')
                    ->references('id')
                    ->on('db_thanhvien')
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
        Schema::dropIfExists('db_datlich');
    }
}
