<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin', [AdminController::class, 'dashboard'])
    ->middleware(['auth', 'admin'])
    ->name('admin');

Route::get('/perfil', [UsuarioController::class, 'perfil'])
    ->middleware('auth')
    ->name('perfil');

Route::resource('users', UserController::class)
    ->middleware(['auth', 'admin']);
