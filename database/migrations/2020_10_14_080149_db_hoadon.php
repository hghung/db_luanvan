<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbHoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_hoadon', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('ma_hoadon')->nullable();

            $table->integer('id_lichsu')->unsigned();
            $table->foreign('id_lichsu')
                    ->references('id')
                    ->on('db_lichsu')
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
        Schema::dropIfExists('db_hoadon');
    }
}
