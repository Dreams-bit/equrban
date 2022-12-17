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
        Schema::create('kariah_pengedar_qurban', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->integer('harga_pengedar');
            $table->integer('available_unit');
            $table->string('whatsapp_status');
            $table->unsignedInteger('kariah_id');
            $table->foreign('kariah_id')
                ->references('id')
                ->on('kariahs')
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
        Schema::dropIfExists('kariah_pengedars');
    }
};
