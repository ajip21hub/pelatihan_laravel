<?php

use App\Http\Controllers\LoginController;
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
