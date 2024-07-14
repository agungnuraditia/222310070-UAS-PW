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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('subject');
            $table->string('department')->nullable();
            $table->text('deskripsi_masalah')->nullable();
            $table->integer('status')->nullable();
            $table->integer('id_divisi')->nullable();
            $table->string('lokasi_ruangan');
            $table->string('jenis_masalah')->nullable();
            $table->foreignId('teknisi_id')->nullable();
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
        Schema::dropIfExists('tickets');
    }
};
