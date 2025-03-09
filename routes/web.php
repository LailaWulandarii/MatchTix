<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserHomeController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('auth.register');
// });
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register-process', [AuthController::class, 'processRegister'])->name('processRegister');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/preferences', [UserHomeController::class, 'preferences'])->name('preferences');
Route::post('/login', [AuthController::class, 'processLogin'])->name('processLogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/coba', [AuthController::class, 'coba'])->name('coba');
Route::get('/home', [UserHomeController::class, 'home'])->name('home');
Route::post('/create-preferences', [ProfileController::class, 'store'])->name('preferences.store');
