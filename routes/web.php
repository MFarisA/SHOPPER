<?php

use App\Livewire\Categories;
use App\Livewire\Components\Auth\Login;
use App\Livewire\Components\Auth\Register;
use App\Livewire\Main;
use Illuminate\Support\Facades\Route;

Route::get('/', Main::class)->name('home');
Route::get('/categories', Categories::class)->name('categori');

Route::get('/auth/login', Login::class)->name('login');
Route::get('/auth/register', Register::class)->name('register');

