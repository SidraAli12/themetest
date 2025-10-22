<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;




Route::get('/dashboard', function () {
    return view('layout.app');
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');
Route::get('/login', [loginController::class, 'showform'])->name('login.show');
Route::post('/login', [loginController::class, 'login'])->name('login.perform');

