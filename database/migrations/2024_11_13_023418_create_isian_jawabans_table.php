<?php

use App\Models\pengguna;
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
        Schema::create('isian_jawabans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_pengguna');
            $table->unsignedBigInteger('id_jawaban');
            $table->unsignedBigInteger('id_test_ujian');
            $table->unsignedBigInteger('id_soal');
            $table->foreign('id_pengguna')->references('id')->on('penggunas');
            $table->foreign('id_jawaban')->references('id')->on('jawabans');
            $table->foreign('id_test_ujian')->references('id')->on('test_ujians');
            $table->foreign('id_soal')->references('id')->on('soals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('isian_jawabans');
    }
};
