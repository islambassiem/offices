<?php

namespace Database\Seeders;

use App\Models\EntityType;
use Illuminate\Database\Seeder;

class EntityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EntityType::create(['name' => 'office']);
        EntityType::create(['name' => 'lab']);
    }
}
