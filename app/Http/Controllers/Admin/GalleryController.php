<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $galleries = Gallery::latest();

        if ($search) {
            $galleries = $galleries->where(function ($query) use ($search) {
                $query->where('name_en', 'like', "%{$search}%")
                      ->orWhere('name_ru', 'like', "%{$search}%")
                      ->orWhere('name_cn', 'like', "%{$search}%")
                      ->orWhere('name_jp', 'like', "%{$search}%");
            });
        }

        $galleries = $galleries->paginate(10);

        return view('admin.gallery', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_ru' => 'nullable|string|max:2000',
            'name_en' => 'nullable|string|max:2000',
            'name_cn' => 'nullable|string|max:2000',
            'name_jp' => 'nullable|string|max:2000',
        ]);

        Gallery::create($validated);

        return redirect()->route('gallery.index')->with([
            'status' => 'success',
            'message' => 'Галерея успешно создана!',
        ]);
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'name_ru' => 'nullable|string|max:2000',
            'name_en' => 'nullable|string|max:2000',
            'name_cn' => 'nullable|string|max:2000',
            'name_jp' => 'nullable|string|max:2000',
        ]);

        $gallery->update($validated);

        return redirect()->route('gallery.index')->with([
            'status' => 'success',
            'message' => 'Галерея успешно обновлена!',
        ]);
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('gallery.index')->with([
            'status' => 'success',
            'message' => 'Галерея удалена!',
        ]);
    }
}
