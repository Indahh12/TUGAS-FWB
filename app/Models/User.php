<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',  // tambah role supaya bisa diisi massal
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relasi: User (pengelola) punya banyak wisata
    public function wisatas()
    {
        return $this->hasMany(Wisata::class, 'created_by');
    }

    // Relasi: User punya banyak pemesanan tiket
    public function pemesananTiket()
    {
        return $this->hasMany(PemesananTiket::class, 'user_id');
    }

    // Relasi: User mengajukan banyak perubahan
    public function pengajuanPerubahan()
    {
        return $this->hasMany(PengajuanPerubahan::class, 'user_id');
    }

    // Relasi many-to-many favorite wisata
    public function favoriteWisatas()
    {
        return $this->belongsToMany(Wisata::class, 'user_wisata_favorite', 'user_id', 'wisata_id')->withTimestamps();
    }
}
