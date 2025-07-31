<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// ROute untuk handle login
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Route Nampilin Data Login
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

// Route untuk Signup (Show Form)
Route::get('/signup', [SignupController::class, 'show'])->name('signup.show');

// Route untuk Signup (Handle POST)
Route::post('/signup', [SignupController::class, 'processSignup'])->name('signup.process');

// Route untuk edit user
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
// Route untuk update user
Route::post('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
// Route untuk hapus user
Route::post('/user/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');

// Buku Tamu
Route::get('/buku-tamu', [App\Http\Controllers\TamuController::class, 'create'])->name('tamu.create');
Route::post('/buku-tamu', [App\Http\Controllers\TamuController::class, 'store'])->name('tamu.store');
Route::get('/buku-tamu/list', [App\Http\Controllers\TamuController::class, 'index'])->name('tamu.index');
Route::get('/buku-tamu/{id}', [App\Http\Controllers\TamuController::class, 'show'])->name('tamu.show');
Route::get('/buku-tamu/{id}/edit', [App\Http\Controllers\TamuController::class, 'edit'])->name('tamu.edit');
Route::put('/buku-tamu/{id}', [App\Http\Controllers\TamuController::class, 'update'])->name('tamu.update');
Route::delete('/buku-tamu/{id}', [App\Http\Controllers\TamuController::class, 'destroy'])->name('tamu.destroy');

// siswa routes
Route::resource('siswa', App\Http\Controllers\SiswaController::class);
