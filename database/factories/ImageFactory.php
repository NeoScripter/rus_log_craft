<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

class ImageFactory extends Factory
{

    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'path' => 'projects/dummy.jpg',
            'type' => fake()->randomElement(['plan', 'image']),
            'order' => fake()->numberBetween(1, 10),
        ];
    }
}
