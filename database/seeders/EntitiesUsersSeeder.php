<?php

namespace Database\Seeders;

use App\Models\EntitiesUsers;
use Illuminate\Database\Seeder;

class EntitiesUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EntitiesUsers::factory()->count(300)->create();
    }
}
