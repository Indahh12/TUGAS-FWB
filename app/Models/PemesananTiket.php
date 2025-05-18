<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemesananTiket extends Model
{
    protected $fillable = [
        'user_id',
        'wisata_id',
        'jumlah_tiket',
        'tanggal_kunjungan',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
