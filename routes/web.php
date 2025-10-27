<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');



Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');
Route::get('/login', [loginController::class, 'showform'])->name('login.show');
Route::post('/login', [loginController::class, 'login'])->name('login.perform');

// Forgot Password – show form (email daalne wala)
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

// Forgot Password – handle email submit
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Reset Password – show form (new password set karne wala)
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');

// Reset Password – handle new password save
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login')->with('status', 'You have been logged out successfully.');
})->name('logout');

