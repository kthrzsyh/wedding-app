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
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama orang yang memberikan komentar
            $table->string('nomor_telephone'); // Nomor telepon
            $table->enum('kehadiran', ['Hadir', 'Tidak Hadir']); // Kehadiran: Hadir atau Tidak Hadir
            $table->text('comments')->nullable(); // Komentar atau ucapan, bisa kosong (nullable)
            $table->timestamps(); // Tanggal pembuatan dan update
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
