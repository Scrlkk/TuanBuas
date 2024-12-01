<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('HomeViews');
});

Route::get('/menu', function () {
    return Inertia::render('MenuViews');
});

Route::get('/', [FoodController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');