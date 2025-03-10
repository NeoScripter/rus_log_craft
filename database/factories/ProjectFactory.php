<?php

namespace Database\Factories;

use App\Models\Project;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'name_ru' => fake()->sentence(3),
            'name_en' => fake()->sentence(3),
            'name_cn' => fake()->sentence(3),
            'name_jp' => fake()->sentence(3),
            'type' => fake()->randomElement(['house', 'house_bath', 'bath', 'utility']),
            'article' => $this->generateArticle(),
            'is_featured' => true,
            'has_terrace' => fake()->boolean(),
            'has_garage' => fake()->boolean(),
            'build_area' => fake()->numberBetween(50, 300),
            'floors' => fake()->numberBetween(1, 3),
            'total_area' => fake()->numberBetween(70, 400),
            'living_area' => fake()->numberBetween(40, 250),
            'roof_area' => fake()->numberBetween(80, 500),
            'bedrooms' => fake()->numberBetween(1, 5),
            'room_type_ru' => fake()->word(),
            'room_type_en' => fake()->word(),
            'room_type_cn' => fake()->word(),
            'room_type_jp' => fake()->word(),
            'bathrooms' => fake()->numberBetween(1, 3),
            'rooms' => fake()->numberBetween(1, 10),
            'price_per_sqm' => fake()->randomFloat(2, 500, 2000),
            'description_ru' => fake()->paragraph(),
            'description_en' => fake()->paragraph(),
            'description_cn' => fake()->paragraph(),
            'description_jp' => fake()->paragraph(),
            'article' => $this->generateArticle(),
            'is_featured' => true,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Project $project) {

            $projectFolder = storage_path("app/public/projects/project-{$project->id}");

            if (is_dir($projectFolder)) {
                $imagePaths = collect(scandir($projectFolder))
                    ->filter(fn ($file) => preg_match('/\.(jpg|jpeg|png|webp)$/i', $file = "$projectFolder/$file"))
                    ->values();

                foreach ($imagePaths as $index => $imagePath) {
                    Image::create([
                        'project_id' => $project->id,
                        'path' => 'projects/project-' . $project->id . '/' . basename($imagePath),
                        'type' => 'image',
                        'order' => $index + 1,
                    ]);
                }
            }

            $planFolder = storage_path('app/public/projects/plan');

            if (is_dir($planFolder = $planImagesFolder = storage_path('app/public/projects/plan'))) {
                $planImages = collect(glob($planFolder . '/*.{jpg,jpeg,png,webp}', GLOB_BRACE))
                    ->shuffle()
                    ->take(fake()->numberBetween(1, 4));

                foreach ($planImages as $index => $planImagePath) {
                    Image::create([
                        'project_id' => $project->id,
                        'path' => 'projects/plan/' . basename($planImagePath),
                        'type' => 'plan',
                        'order' => $index + 1,
                    ]);
                }
            }
        });
    }

    protected function generateArticle(): string
    {
        $prefix = fake()->numberBetween(10, 99);
        $letter = fake()->randomElement(['А', 'Б', 'В', 'Г', 'Д', 'Е']);
        $middle = fake()->randomNumber(2, true);
        $suffix = fake()->randomNumber(2, true);
        $postfix = 'АР';

        return "{$prefix}-{$letter}-{$middle}/{$suffix}-{$postfix}";
    }
}
