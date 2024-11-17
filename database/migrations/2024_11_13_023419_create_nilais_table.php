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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('total_nilai');
            $table->timestamp('tanggal_nilai');
            $table->unsignedBigInteger('id_pengguna');
            $table->unsignedBigInteger('id_ujian');
            $table->foreign('id_pengguna')->references('id')->on('penggunas');
            $table->foreign('id_ujian')->references('id')->on('ujians');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
