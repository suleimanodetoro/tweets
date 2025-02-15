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

// Idea routes
Route::get('/ideas', [IdeaController::class, "index"])->name('ideas.index');
Route::get('/ideas/{idea}', [IdeaController::class, "show"])->name('ideas.show');
Route::get('/ideas/{idea}/edit', [IdeaController::class, "edit"])->name('ideas.edit');
Route::put('/ideas/{idea}', [IdeaController::class, "update"])->name('ideas.update');
Route::post('/ideas', [IdeaController::class, "store"])->name('ideas.create');
Route::delete('/ideas/{id}', [IdeaController::class, "destroy"])->name('ideas.destroy');
