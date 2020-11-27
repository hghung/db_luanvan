<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbPhuongthucthanhtoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_phuongthucthanhtoan', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ten_phuongthuc');
            $table->string('path_logo');


            $table->integer('id_trangthai')->unsigned();
            $table->foreign('id_trangthai')
                    ->references('id')
                    ->on('db_trangthai')
                    ->onDelete('cascade');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_phuongthucthanhtoan');
    }
}
