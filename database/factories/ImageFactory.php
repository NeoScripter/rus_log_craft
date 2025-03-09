<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

class ImageFactory extends Factory
{
    protected static $availableImages = null;

    public function definition(): array
    {
        if (self::$availableImages === null || self::$availableImages->isEmpty()) {
            self::$availableImages = collect(glob(storage_path('app/public/projects/*.*')))
                ->map(fn($path) => 'projects/' . basename($path))
                ->shuffle();
        }

        $imagePath = self::$availableImages->pop();

        return [
            'project_id' => Project::factory(),
            'path' => $imagePath,
            'type' => 'image',
            'order' => fake()->numberBetween(1, 10),
        ];
    }
}
