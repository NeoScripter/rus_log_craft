<?php

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;

it('loads featured projects to the main page', function () {

    Project::factory()->count(6)->create([
        'name' => 'Test Project',
        'link' => 'http://project.com',
    ]);

    $this->assertGreaterThan(0, Project::count());

    $response = $this->get('/');

    $response->assertOk();

    $projects = Project::all();

    $projects->each(function ($project) use ($response) {
        $response->assertSee($project->name);
        $response->assertSee($project->link);
    });

});
