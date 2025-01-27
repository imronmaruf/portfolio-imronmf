<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\be\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Add your routes here
    Route::resource('profile', DashboardController::class);
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
