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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('warkop_name');
            $table->string('warkop_address');
            $table->boolean('jasa_desain_interior');
            $table->boolean('jasa_desain_branding');
            $table->boolean('jasa_desain_pencahayaan');
            $table->boolean('jasa_desain_exterior');
            $table->boolean('jasa_pengurusan_internet');
            $table->integer('persediaan_meja');
            $table->integer('persediaan_kursi');
            $table->integer('persediaan_lemari');
            $table->integer('persediaan_lampu');
            $table->integer('persediaan_kipas');
            $table->integer('persediaan_wire');
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
        Schema::dropIfExists('pesanan');
    }
};
