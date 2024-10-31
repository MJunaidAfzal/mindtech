<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

//dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('form', [DashboardController::class, 'form'])->name('form');
    Route::post('profile/edit', [DashboardController::class, 'profileEdit'])->name('profile.edit');
    Route::get('calender', [DashboardController::class, 'calender'])->name('calender');
    Route::get('table', [DashboardController::class, 'table'])->name('table');
});

//login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'customLogin'])->name('custom.login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
