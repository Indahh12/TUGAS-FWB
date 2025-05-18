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
       Schema::create('pemesanan_tiket', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('user_id'); // FK ke users
    $table->unsignedBigInteger('wisata_id'); // FK ke wisatas
    $table->integer('jumlah_tiket');
    $table->date('tanggal_kunjungan');
    $table->enum('status', ['pending', 'berhasil', 'dibatalkan'])->default('pending');
    $table->timestamps();

    // Foreign key constraints
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    $table->foreign('wisata_id')->references('id')->on('wisatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_tiket');
    }
};
