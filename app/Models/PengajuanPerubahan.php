<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanPerubahan extends Model
{
    protected $fillable = [
        'user_id',
        'wisata_id',
        'perubahan',
        'status',
    ];

    public function pengelola()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
