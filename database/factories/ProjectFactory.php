<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'image' => collect(glob(storage_path('app/public/projects/*.*')))
            ->map(fn($path) => 'projects/' . basename($path))
            ->random(),
            'link' => fake()->url(),
            'is_featured' => true,
            'volume' => fake()->randomDigit(),
            'floors' => fake()->randomDigit(),
            'article' => fake()->word(),
            'rooms' => fake()->word(),
        ];
    }
}
