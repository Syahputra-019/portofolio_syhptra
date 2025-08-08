<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
public function run(): void
{
    Skill::insert([
        [
        'nama' => 'Laravel',
        'logo' => 'skills/laravel.jpg', // pastikan file ini tersedia di storage/app/public/skills
        ],
        [
        'nama' => 'Flutter',
        'logo' => 'skills/flutter.jpg',
        ],
        [
        'nama' => 'MySQL',
        'logo' => 'skills/mysql.jpg',
        ],
        [
        'nama' => 'IoT',
        'logo' => 'skills/iot.jpg',
        ],
        [
        'nama' => 'Cisco Packet Tracer',
        'logo' => 'skills/cisco.jpg',
        ],
        [
        'nama' => 'Figma',
        'logo' => 'skills/figma.jpg',
        ],
    ]);
}
}
