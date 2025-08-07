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
                'deskripsi' => 'Mahasiswa Informatika yang antusias dalam pengembangan web dan mobile.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
