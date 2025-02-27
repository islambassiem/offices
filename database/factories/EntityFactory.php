<?php

namespace Database\Factories;

use App\Models\EntityType;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entity>
 */
class EntityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'entity_type_id' => EntityType::inRandomOrder()->first()->id,
            'section_id' => Section::inRandomOrder()->first()->id,
            'number' => fake()->buildingNumber(),
            'singularity' => fake()->boolean(),
            'keys_count' => fake()->randomNumber(1),
            'description' => fake()->text(),
        ];
    }
}
