<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CataController;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('inicio');
    Route::get('/fest', 'fest')->name('fest');
    Route::get('/gracias', 'gracias')->name('gracias');
});

Route::get('/catas', [CataController::class, 'index'])->name('catas');
Route::get('/catas/{cata}/registro', [CataController::class, 'form'])->name('catas.registro');
Route::post('/catas/{cata}/registro', [CataController::class, 'registrar'])->name('catas.registrar');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
