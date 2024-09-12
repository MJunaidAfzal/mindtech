<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('form' , [DashboardController::class , 'form'])->name('form');
Route::get('calender' , [DashboardController::class , 'calender'])->name('calender');
Route::get('table' , [DashboardController::class , 'table'])->name('table');
