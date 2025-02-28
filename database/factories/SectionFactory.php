<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $building_id = Building::inRandomOrder()->first()->id;

        return [
            'building_id' => $building_id,
            'number' => fake()->buildingNumber(),
            'description' => fake()->text(),
        ];
    }
}
