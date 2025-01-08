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
        static $availableImages = null;

        if ($availableImages === null) {
            $availableImages = collect(glob(storage_path('app/public/projects/*.*')))
                ->map(fn($path) => 'projects/' . basename($path))
                ->shuffle();
        }

        $image = $availableImages->pop();

        return [
            'name' => fake()->words(3, true),
            'image' => $image,
            'link' => "",
            'is_featured' => true,
            'volume' => fake()->randomDigit(),
            'floors' => fake()->randomDigit(),
            'article' => $this->generateArticle(),
            'rooms' => fake()->word(),
        ];
    }

    function generateArticle() {
        $prefix = fake()->numberBetween(10, 99);
        $letter = fake()->randomElement(['А', 'Б', 'В', 'Г', 'Д', 'Е']);
        $middle = fake()->randomNumber(2, true);
        $suffix = fake()->randomNumber(2, true);
        $postfix = 'АР';

        return "{$prefix}-{$letter}-{$middle}/{$suffix}-{$postfix}";
    }
}
