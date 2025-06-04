<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;


Route::middleware(AuthMiddleware::class)->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::redirect('/', '/companies')->name('home');
    Route::resource('companies', CompanyController::class);
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('show.login');
    Route::post('/login', 'login')->name('login');
});
