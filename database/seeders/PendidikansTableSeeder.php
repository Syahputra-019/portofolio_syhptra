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
                'nama_sekolah' => 'SMA 9 Malang',
                'jurusan' => 'MIPA',
                'tahun' => '2018 - 2021',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_sekolah' => 'Universitas Brawijaya',
                'jurusan' => 'TI',
                'tahun' => '2021 - Sekarang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
