<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Proyek;
use Illuminate\Database\Seeder;

class ProyekSeeder extends Seeder
{
    public function run(): void
    {
        $desktop = Kategori::where('nama', 'Desktop')->first();
        $website = Kategori::where('nama', 'Website')->first();
        $tools = Kategori::where('nama', 'Tools')->first();

        Proyek::create([
            'kategori_id' => $desktop->id,
            'judul' => 'Project PBO',
            'teknologi' => 'C#',
            'tahun' => 2026,
            'status' => 'Selesai',
            'gambar' => 'asset/projek1.png',
        ]);

        Proyek::create([
            'kategori_id' => $website->id,
            'judul' => 'Project GB Point Blank',
            'teknologi' => 'HTML & CSS',
            'tahun' => 2026,
            'status' => 'Selesai',
            'gambar' => 'asset/projek2.png',
        ]);

        Proyek::create([
            'kategori_id' => $tools->id,
            'judul' => 'Project MP3 To FLAC',
            'teknologi' => 'Python',
            'tahun' => 2026,
            'status' => 'Selesai',
            'gambar' => 'asset/projek3.png',
        ]);
    }
}
