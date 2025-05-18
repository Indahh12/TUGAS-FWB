<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $fillable = [
        'nama_wisata',
        'lokasi',
        'deskripsi',
        'foto',
        'status',
        'created_by',
    ];

    // Relasi ke user (pengelola)
    public function pengelola()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relasi ke pemesanan tiket
    public function pemesananTiket()
    {
        return $this->hasMany(PemesananTiket::class);
    }

    // Relasi ke pengajuan perubahan
    public function pengajuanPerubahan()
    {
        return $this->hasMany(PengajuanPerubahan::class);
    }
}
