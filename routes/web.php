<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Models\Project;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $projects = Project::where('is_featured', true)->limit(6)->get();

    return view('user.index', compact('projects'));
})->name('user.home');

Route::get('/about', function () {
    $projects = Project::where('is_featured', true)->limit(3)->get();

    return view('user.about', compact('projects'));
})->name('user.about');

Route::get('/catalog', function () {

    return view('user.catalog');
})->name('user.catalog');

Route::get('/catalog/{project}', function (Project $project) {
    $project->load(['images', 'plans']);

    return view('user.project', compact('project'));
})->name('user.project');

Route::get('/tech', function () {

    return view('user.tech');
})->name('user.tech');

Route::get('/gallery', function () {

    return view('user.gallery');
})->name('user.gallery');

Route::get('/contacts', function () {
    $projects = Project::where('is_featured', true)->limit(3)->get();

    return view('user.contacts', compact('projects'));
})->name('user.contacts');

Route::get('/services', function () {

    return view('user.services');
})->name('user.services');

Route::get('/privacy-policy', function () {

    return view('user.privacy-policy');
})->name('user.privacy-policy');

/* Route::get('/admin', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('admin'); */

Route::middleware(['auth'])->prefix('admin')->name('gallery.')->group(function () {
    Route::get('/gallery', [GalleryController::class, 'index'])->name('index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('create');
    Route::post('/gallery', [GalleryController::class, 'store'])->name('store');
    Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('edit');
    Route::put('/gallery/{gallery}', [GalleryController::class, 'update'])->name('update');
    Route::delete('/gallery/{gallery}', [GalleryController::class, 'destroy'])->name('destroy');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin', [ProjectController::class, 'index'])->name('admin');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});

Route::get('/set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['ru', 'en', 'cn', 'jp'])) {
        Session::put('locale', $locale);
        App::setlocale($locale);
    }
    return back();
})->name('set-locale');

require __DIR__.'/auth.php';
