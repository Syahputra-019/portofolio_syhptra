<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portofolio;

class PortofolioSeeder extends Seeder
{
    public function run(): void
    {
        Portofolio::create([
            'nama' => 'Website Profil',
            'deskripsi' => 'Website portofolio pribadi menggunakan Laravel dan Tailwind CSS.',
            'gambar' => 'portofolio/website-profil.png',
        ]);

        Portofolio::create([
            'nama' => 'Aplikasi Tugas',
            'deskripsi' => 'Aplikasi pengelola tugas harian menggunakan Vue.js.',
            'gambar' => 'portofolio/aplikasi-tugas.png',
        ]);
    }
}
