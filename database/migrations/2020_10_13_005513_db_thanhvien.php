<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbThanhvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_thanhvien', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('username');
            $table->string('password');

            $table->integer('dien_thoai')->nullable();
            $table->string('email');
            
            $table->string('name')->nullable();
            $table->string('ho')->nullable();
            $table->string('ten')->nullable();

            $table->string('gioi_tinh')->nullable();
            $table->string('dia_chi')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->text('gioi_thieu')->nullable();


            $table->string('avatar')->nullable();

            $table->integer('id_phuongxa')->nullable();


            $table->integer('id_trangthai')->unsigned();
            $table->foreign('id_trangthai')
                    ->references('id')
                    ->on('db_trangthai')
                    ->onDelete('cascade');

            $table->integer('id_vaitro')->unsigned();
            $table->foreign('id_vaitro')
                    ->references('id')
                    ->on('db_vaitro')
                    ->onDelete('cascade');
            
            $table->integer('id_loaithanhvien')->unsigned();
            $table->foreign('id_loaithanhvien')
                    ->references('id')
                    ->on('db_loaithanhvien')
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
        Schema::dropIfExists('db_thanhvien');
    }
}
