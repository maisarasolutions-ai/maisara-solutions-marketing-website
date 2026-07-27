<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::group([
    'prefix' => '{locale}',
    'middleware' => ['locale'],
    'where' => ['locale' => 'en|ar'],
], function () {
    // Client Authentication
    Route::get('/client/login', [LoginController::class, 'showLoginForm'])->name('client.login');
    Route::post('/client/login', [LoginController::class, 'login'])->name('client.login.submit');
    Route::post('/client/logout', [LoginController::class, 'logout'])->name('client.logout');

    Route::get('/client/register', [RegisterController::class, 'showRegistrationForm'])->name('client.register');
    Route::post('/client/register', [RegisterController::class, 'register'])->name('client.register.submit');

    Route::get('/client/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('client.password.request');
    Route::post('/client/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('client.password.email');
    Route::get('/client/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('client.password.reset');
    Route::post('/client/reset-password', [ResetPasswordController::class, 'reset'])->name('client.password.update');
});
