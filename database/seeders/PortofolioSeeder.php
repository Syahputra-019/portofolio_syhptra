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
                'judul' => 'Website pencarian pekerjaan',
                'tahun' => '2025',
                'deskripsi' => 'Mengembangkan website pencarian pekerjaan menggunakan Laravel, bertanggung jawab untuk backend dan frontend, menerapkan sistem manajemen database dan otentikasi pengguna.',
                'gambar' => 'skills/p1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'UI/UX Aplikasi Pencarian Kerja',
                'tahun' => '2025',
                'deskripsi' => 'Mengembangkan UI/UX untuk aplikasi mobile pencarian pekerjaan, menerapkan prinsip-prinsip desain yang berpusat pada pengguna.',
                'gambar' => 'skills/p2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Iot',
                'tahun' => '2025',
                'deskripsi' => 'Membangun sistem Smart Garden dengan sensor dan IoT.  Memantau suhu, kelembaban, dan curah hujan secara real-time. Mengendalikan pompa air otomatis berdasarkan kelembaban tanah. Menyediakan antarmuka pengguna di Adafruit IO.',
                'gambar' => 'skills/p3.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
