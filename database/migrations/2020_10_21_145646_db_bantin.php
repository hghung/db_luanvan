<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbBantin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_bantin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_bantin')->nullable();
            $table->string('tieu_de');
            $table->text('mo_ta');
            $table->bigInteger('gia_tien');
            
            $table->integer('views');
            $table->string('slug')->nullable();
            
            $table->integer('id_hinhthuc')->unsigned();
            $table->foreign('id_hinhthuc')
                    ->references('id')
                    ->on('db_hinhthuc')
                    ->onDelete('cascade');

            $table->integer('id_trangthai')->unsigned();
            $table->foreign('id_trangthai')
                    ->references('id')
                    ->on('db_trangthai')
                    ->onDelete('cascade');
            
            $table->integer('id_loaibantin')->unsigned();
            $table->foreign('id_loaibantin')
                    ->references('id')
                    ->on('db_loaibantin')
                    ->onDelete('cascade');

            $table->integer('id_thanhvien')->unsigned();
            $table->foreign('id_thanhvien')
                    ->references('id')
                    ->on('db_thanhvien')
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
        Schema::dropIfExists('db_bantin');
    }
}
