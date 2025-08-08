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
                'nama_sekolah' => 'SMP 18 Malang',
                'jurusan' => 'MIPA',
                'tahun' => '2017 - 2020',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sekolah' => 'SMA 9 Malang',
                'jurusan' => 'MIPA',
                'tahun' => '2010 - 2023',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sekolah' => 'Universitas Brawijaya',
                'jurusan' => 'TI',
                'tahun' => '2023 - Sekarang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
