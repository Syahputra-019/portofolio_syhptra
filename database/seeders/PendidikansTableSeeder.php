<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendidikansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendidikans')->insert([
            [
                'nama_sekolah' => 'SMK Negeri 1 Jakarta',
                'jurusan' => 'Teknik Komputer dan Jaringan',
                'tahun' => '2018 - 2021',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sekolah' => 'Universitas Indonesia',
                'jurusan' => 'Ilmu Komputer',
                'tahun' => '2021 - Sekarang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
