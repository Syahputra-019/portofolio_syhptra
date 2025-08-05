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
            ],
            [
                'nama' => 'CraftedWorks',
                'deskripsi' => 'Platform freelance untuk penulis dan desainer.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
