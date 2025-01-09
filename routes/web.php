<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman Home
Route::get('home', [HomeController::class, 'index'])->name('home');

// Route untuk halaman Profile (invokable controller)
Route::get('profile', ProfileController::class)->name('profile');

// Resource route untuk Employee
Route::resource('employees', EmployeeController::class);
