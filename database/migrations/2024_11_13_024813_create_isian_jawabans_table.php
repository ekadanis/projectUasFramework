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
            $table->foreign('id_pengguna')->references('id')->on('pengguna');
            $table->foreign('id_jawaban')->references('id')->on('jawaban');
            $table->foreign('id_test_ujian')->references('id')->on('test_ujian');
            $table->foreign('id_soal')->references('id')->on('soal');
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
