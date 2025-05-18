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
        Schema::create('pengajuan_perubahan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengelola_id');
            $table->unsignedBigInteger('wisata_id');
            $table->text('perubahan');
            $table->enum('status', ['pending', 'disetujui', 'ditolak'])->default('pending');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('pengelola_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('wisata_id')->references('id')->on('wisatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_perubahan');
    }
};
