<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wisata;

class WisataSeeder extends Seeder
{
    public function run()
    {
       Wisata::create([
            'nama_wisata' => 'Gunung Latimojong',
            'lokasi' => 'Desa Latimojong, Kecamatan Buntu Batu, Kabupaten Enrekang',
            'deskripsi' => 'Gunung tertinggi di Sulawesi dengan puncak Rante Mario, menawarkan trekking, camping, dan wisata alam lainnya.',
            'foto' => 'gunung_latimojong.jpg',
            'status' => 'aktif',
            'created_by' => 1, // ID pengelola (misalnya admin)
        ]);

        Wisata::create([
            'nama_wisata' => 'Dante Pine',
            'lokasi' => 'Desa Kapar, Kecamatan Anggeraja, Kabupaten Enrekang',
            'deskripsi' => 'Destinasi wisata dengan pohon pinus, pemandangan Gunung Nona, dan berbagai fasilitas keluarga.',
            'foto' => 'dante_pine.jpg',
            'status' => 'aktif',
            'created_by' => 1, // ID pengelola (misalnya admin)
        ]);
    }
}
