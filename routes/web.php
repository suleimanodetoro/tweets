<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// default route
Route::get('/', [DashboardController::class, "index"]);
Route::get('/users/profile', [ProfileController::class, "index"]);
Route::get('terms', function () {
    return view('terms');
});

// Route::get('/layout', function () {
//     return view('layout.layout');
// });



