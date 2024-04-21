<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('user')->group(function () {
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/registration', [RegisterController::class, 'registration'])->name('registration');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
