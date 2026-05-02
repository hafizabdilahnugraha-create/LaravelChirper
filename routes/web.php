<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ubah bagian ini
Route::get('/login', function () {
    return view('login'); // Memanggil file login.blade.php
})->name('login');

Route::get('/register', function () {
    return view('register'); // Memanggil file register.blade.php
})->name('register');

// Contoh rute home yang sudah kamu buat
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
