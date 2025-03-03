<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::create(['number' => 'A', 'description' => 'Male building']);
        Section::create(['number' => 'B', 'description' => 'Female building']);
    }
}
