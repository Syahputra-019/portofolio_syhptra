<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TentangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tentangs')->insert([
            [
                'nama' => 'Syahputra Tirta Wijaya',
                'deskripsi' => 'Mahasiswa aktif Program Studi Teknologi Informasi di Fakultas Vokasi, Universitas Brawijaya. Memiliki pengalaman dalam pengembangan website, desain UI/UX, jaringan komputer, serta Internet of Things. Memiliki semangat belajar tinggi, jujur, bertanggung jawab, dan mampu bekerja dalam tim maupun individu.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
