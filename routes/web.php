<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// default route
Route::get('/', [DashboardController::class, "index"])->name('dashboard');
Route::get('/users/profile', [ProfileController::class, "index"]);
Route::get('terms', function () {
    return view('terms');
});

Route::get('/ideas', [IdeaController::class,"index"])->name('idea.index'); // Changed this to 'index' method
Route::post('/ideas', [IdeaController::class,"store"])->name('idea.create');

// Route::get('/layout', function () {
//     return view('layout.layout');
// });
