<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CataController;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('inicio');
    Route::get('/gracias', 'gracias')->name('gracias');
});
//Grandezza Fest
Route::controller(CataController::class)->group(function () {
    Route::get('/fest', 'fest')->name('fest');
    //Route::get('/gracias', 'gracias')->name('gracias');
    //Route::get('/catas', 'index')->name('catas');
    //Route::get('/catas/{cata}/registro', 'form')->name('catas.registro');
    //Route::post('/catas/{cata}/registro', 'registrar')->name('catas.registrar');
    //Route::get('/catas/salones', 'registrosAgrupados')->name('catas.salones');
    //Route::get('/catas/admin', 'registrosAgrupadosAdmin')->name('catas.admin');
    //Route::delete('/catas/{id}', [CataController::class, 'destroy'])->name('catas.destroy');
});

//Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
