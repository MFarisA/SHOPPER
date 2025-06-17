<?php

use App\Livewire\Categories;
use App\Livewire\Main;
use Illuminate\Support\Facades\Route;

Route::get('/', Main::class)->name('home');
Route::get('/categories', Categories::class)->name('categori');