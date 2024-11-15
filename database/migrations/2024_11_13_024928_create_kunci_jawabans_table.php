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
        Schema::create('kunci_jawabans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('id_jawaban')->references('id')->on('jawaban');
            $table->foreign('id_soal')->references('id')->on('soal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunci_jawabans');
    }
};