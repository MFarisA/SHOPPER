<?php

use App\Http\Controllers\Auth\AuthController;
use App\Livewire\Auth\OtpVerification;
use App\Livewire\Categories;
use App\Livewire\Components\Auth\Login;
use App\Livewire\Components\Auth\Register;
use App\Livewire\Components\ShowItemProducts;
use App\Livewire\Main;
use Illuminate\Support\Facades\Route;


Route::get('/', Main::class)->name('home');
Route::get('/categories', Categories::class)->name('categori');

Route::get('/auth/login', Login::class)->name('login');
Route::get('/auth/register', Register::class)->name('register');

Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');

Route::get('/verification-otp', OtpVerification::class)->middleware('auth')->name('verification.notice');

Route::middleware(['auth'])->group(function () {
    Route::get('/item/{slug}', ShowItemProducts::class)->name('item.show');
    Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
});