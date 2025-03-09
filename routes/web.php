<?php

use App\Http\Controllers\ProfileController;
use App\Models\Project;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $projects = Project::where('is_featured', true)->get();

    return view('user.index', compact('projects'));
});

Route::get('/about', function () {
    $projects = Project::where('is_featured', true)->limit(3)->get();

    return view('user.about', compact('projects'));
})->name('user.about');

Route::get('/catalog', function () {
    $projects = Project::all();

    return view('user.catalog', compact('projects'));
})->name('user.catalog');

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

Route::get('/admin', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/set-locale/{locale}', function ($locale) {
    if (in_array($locale, ['ru', 'en', 'cn', 'jp'])) {
        Session::put('locale', $locale);
        App::setlocale($locale);
    }
    return back();
})->name('set-locale');

require __DIR__.'/auth.php';
