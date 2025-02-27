<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(150)->create();
        $this->call([
            BuildingSeeder::class,
            SectionSeeder::class,
            EntityTypeSeeder::class,
            EntitySeeder::class,
            EntitiesUsersSeeder::class,
        ]);
    }
}
