<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        Kategori::create(['nama' => 'Desktop']);
        Kategori::create(['nama' => 'Website']);
        Kategori::create(['nama' => 'Tools']);
    }
}
