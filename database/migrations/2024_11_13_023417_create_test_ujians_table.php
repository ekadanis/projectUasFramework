<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('test_ujians', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_berakhir');
            $table->integer('durasi');
            $table->unsignedBigInteger('id_ujian');
            $table->foreign('id_ujian')->references('id')->on('ujians');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_ujians');
    }
};
