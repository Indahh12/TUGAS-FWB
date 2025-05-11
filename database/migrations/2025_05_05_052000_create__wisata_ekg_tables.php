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
        // Tabel users
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->enum('role', ['admin', 'user']);
            $table->timestamps();
        });

        // Tabel wisatas
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wisata', 150);
            $table->string('lokasi', 255);
            $table->text('deskripsi');
            $table->string('foto', 255);
            $table->enum('status', ['disetujui', 'pending', 'ditolak'])->default('pending');
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });

        // Tabel pemesanan_tiket (Relasi Many to Many via pemesanan_tiket)
        Schema::create('pemesanan_tiket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('wisata_id')->constrained('wisatas')->onDelete('cascade');
            $table->integer('jumlah_tiket');
            $table->date('tanggal_kunjungan');
            $table->enum('status', ['pending', 'berhasil', 'dibatalkan'])->default('pending');
            $table->timestamps();
        });

        // Tabel profils (profil untuk setiap user)
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->timestamps();
        });

        // Tabel Many to Many: user_wisata_favorite (Relasi favorit wisata)
        Schema::create('user_wisata_favorite', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('wisata_id')->constrained('wisatas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_wisata_favorite');
        Schema::dropIfExists('profils');
        Schema::dropIfExists('pemesanan_tiket');
        Schema::dropIfExists('wisatas');
        Schema::dropIfExists('user');
    }
};
