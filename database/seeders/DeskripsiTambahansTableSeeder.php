<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeskripsiTambahansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh hardcoded: pastikan id `tentang_id` ini sesuai data nyata
        DB::table('deskripsi_tambahans')->insert([
            [
                'tentang_id' => 1, // Sesuaikan dengan ID yang ada di tabel `tentangs`
                'deskripsi' => 'Mahasiswa aktif Program Studi Teknologi Informasi dengan minat pada web development, UI/UX, serta sistem jaringan. Terbiasa bekerja secara individu maupun dalam tim, serta memiliki dedikasi dan tanggung jawab tinggi.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
