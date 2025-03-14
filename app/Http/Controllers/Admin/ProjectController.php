<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $projects = Project::latest();

        if ($search) {
            $projects->where(function ($query) use ($search) {
                $query->where('name_en', 'like', "%{$search}%")
                      ->orWhere('name_ru', 'like', "%{$search}%")
                      ->orWhere('name_cn', 'like', "%{$search}%")
                      ->orWhere('name_jp', 'like', "%{$search}%");
            });
        }

        $projects = $projects->paginate(10);
        return view('admin.admin', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'name_cn' => 'nullable|string|max:255',
            'name_jp' => 'nullable|string|max:255',
            'type' => 'required|in:house,house_bath,bath,utility',
            'article' => 'required|string|max:255',
            'is_featured' => 'boolean',
            'has_terrace' => 'boolean',
            'has_garage' => 'boolean',
            'build_area' => 'nullable|integer|min:1',
            'floors' => 'nullable|integer|min:1|max:100',
            'total_area' => 'nullable|integer|min:1',
            'living_area' => 'nullable|integer|min:1',
            'roof_area' => 'nullable|integer|min:1',
            'bedrooms' => 'required|integer|min:0|max:200',
            'room_type_ru' => 'nullable|string|max:255',
            'room_type_en' => 'nullable|string|max:255',
            'room_type_cn' => 'nullable|string|max:255',
            'room_type_jp' => 'nullable|string|max:255',
            'bathrooms' => 'required|integer|min:0|max:100',
            'rooms' => 'required|integer|min:1|max:100',
            'price_per_sqm' => 'required|integer|min:1',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_cn' => 'nullable|string',
            'description_jp' => 'nullable|string',
        ]);

        Project::create($validated);

        return redirect()->route('admin')->with([
            'status' => 'success',
            'message' => 'Проект успешно создан!',
        ]);
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'name_ru' => 'nullable|string|max:255',
            'name_en' => 'nullable|string|max:255',
            'name_cn' => 'nullable|string|max:255',
            'name_jp' => 'nullable|string|max:255',
            'type' => 'required|in:house,house_bath,bath,utility',
            'article' => 'required|string|max:255',
            'is_featured' => 'boolean',
            'has_terrace' => 'boolean',
            'has_garage' => 'boolean',
            'build_area' => 'nullable|integer|min:1',
            'floors' => 'nullable|integer|min:1|max:100',
            'total_area' => 'nullable|integer|min:1',
            'living_area' => 'nullable|integer|min:1',
            'roof_area' => 'nullable|integer|min:1',
            'bedrooms' => 'required|integer|min:0|max:200',
            'room_type_ru' => 'nullable|string|max:255',
            'room_type_en' => 'nullable|string|max:255',
            'room_type_cn' => 'nullable|string|max:255',
            'room_type_jp' => 'nullable|string|max:255',
            'bathrooms' => 'required|integer|min:0|max:100',
            'rooms' => 'required|integer|min:1|max:100',
            'price_per_sqm' => 'required|integer|min:1',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'description_cn' => 'nullable|string',
            'description_jp' => 'nullable|string',
        ]);

        $project->update($validated);

        return redirect()->route('admin')->with([
            'status' => 'success',
            'message' => 'Проект успешно обновлен!',
        ]);
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin')->with([
            'status' => 'success',
            'message' => 'Проект удален!',
        ]);
    }
}
