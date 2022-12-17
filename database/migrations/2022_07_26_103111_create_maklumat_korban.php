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
        Schema::create('maklumat_korban', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('harga_qurban_bahagian');
            $table->integer('harga_qurban_seekor');
            $table->integer('kuantiti_lembu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maklumat_korban');
    }
};
