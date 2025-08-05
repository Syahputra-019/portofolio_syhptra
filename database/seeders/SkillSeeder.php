<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
public function run(): void
{
    Skill::create([
        'nama' => 'Laravel',
        'logo' => 'skills/laravel.jpg', // pastikan file ini tersedia di storage/app/public/skills
    ]);
}
}
