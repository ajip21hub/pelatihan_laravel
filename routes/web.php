<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/user/{id}', function ($id) {
    return 'user id '.$id;
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', function () {
        return 'Halaman Admin';
    });

    Route::get('/user', function () {
        return 'Halaman User Admin';
    });

    Route::get('/produk', function () {
        return 'Halaman Produk Admin';
    });
});


Route::get('/produk/{id}', function ($id) {
    return 'Halaman Produk dengan ID '.$id;
})->where('id', '[0-9]+');