<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        $voucherTable = config('vouchers.table', 'vouchers');
        $pivotTable = config('vouchers.pivot_table', 'user_voucher');

        Schema::create($voucherTable, function (Blueprint $table) {
            $table->Increments('id');
            $table->string('code', 32)->unique();
            $table->morphs('model');
            $table->text('data')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });

        Schema::create($pivotTable, function (Blueprint $table) use ($voucherTable) {
            $table->Increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('voucher_id');
            $table->timestamp('redeemed_at');

            $table->foreign('user_id')->references('id')->on('db_thanhvien');
            $table->foreign('voucher_id')->references('id')->on($voucherTable);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(config('vouchers.pivot_table', 'user_voucher'));
        Schema::dropIfExists(config('vouchers.table', 'vouchers'));
    }
}
