<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kariah_booking_korban', function (Blueprint $table) {
            $table->increments('id');
            $table->string('peserta_name');
            $table->string('pakej_korban');
            $table->string('harga_korban');
            $table->string('status_pembayaran');
            $table->string('receipt_name');
            $table->string('file_path');
            $table->unsignedInteger('kariah_id');
            $table->foreign('kariah_id')
                ->references('id')
                ->on('kariahs')
                ->onDelete('cascade');
            $table->string('hari_korban');
            $table->string('waktu_sembelihan');
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
        Schema::dropIfExists('kariah_booking_korban');
    }
};
