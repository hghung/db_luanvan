<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->float('rating');

            $table->bigInteger('id_cmt')->unsigned();
            $table->foreign('id_cmt')
                    ->references('id')
                    ->on('comments')
                    ->onDelete('cascade');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')
                    ->references('id')
                    ->on('db_thanhvien')
                    ->onDelete('cascade');

            $table->integer('id_bantin')->unsigned();
            $table->foreign('id_bantin')
                    ->references('id')
                    ->on('db_bantin')
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
        Schema::dropIfExists('ratings');
    }
}
