<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProjectController;



// Ruta para cambiar idioma
Route::get('locale/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'es', 'fr','tr'])) {
        Session::put('locale', $lang);
    }
    return back();
})->name('locale');

Route::get('/', function () {
    return view('welcome');
})->name('home');;
Route::get('/projects', [ProjectController::class, 'index'])->middleware(['auth', 'verified'])->name('projects.index');

Route::resource('students', StudentController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
