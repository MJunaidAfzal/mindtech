<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
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

//Register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'customRegister'])->name('custom.register');

//Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//Event
Route::get('events' , [EventController::class , 'index'])->name('events.index');
Route::get('/add-events', [EventController::class, 'addEvents'])->name('events.create');
Route::post('/events-store', [EventController::class, 'eventStore'])->name('events.store');
Route::get('/edit-events-{title}', [EventController::class, 'editEvents'])->name('events.edit');
Route::post('/events-update-{title}', [EventController::class, 'eventUpdate'])->name('events.update');
Route::delete('events-delete-{title}' , [EventController::class , 'destroy'])->name('events.destroy');
Route::get('/view-events-{title}', [EventController::class, 'viewEvents'])->name('events.view');



