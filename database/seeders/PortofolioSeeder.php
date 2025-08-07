<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portofolio;
use Illuminate\Support\Facades\DB;

class PortofolioSeeder extends Seeder
{
        public function run(): void
    {
        DB::table('portofolios')->insert([
            [
                'judul' => 'Membuat website pencarian pekerjaan',
                'tahun' => '2025',
                'deskripsi' => 'membuat website pencarian pekerjaan dengan laravel.',
                'gambar' => 'skills/p1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Desain UI Aplikasi Mobile',
                'tahun' => '2025',
                'deskripsi' => 'Mendesain antarmuka pengguna untuk aplikasi mobile pencarian pekerjaan.',
                'gambar' => 'skills/p2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Iot',
                'tahun' => '2025',
                'deskripsi' => 'Membuat smart garden, yang terdapat penyiraman otomatis, deteksi suhu, dan deteksi hujan.',
                'gambar' => 'skills/p3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
