<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Route untuk proses login (form submit)
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
