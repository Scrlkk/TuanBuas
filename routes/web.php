<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama yang mengarah ke daftar post
Route::get('/', [PostController::class, 'index']);

// Rute resource untuk post (CRUD)
Route::resource('posts', PostController::class);

// Rute autentikasi bawaan Laravel
Auth::routes();

// Rute untuk halaman home setelah login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
