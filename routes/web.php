<?php

use App\Livewire\Main;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('components.layouts.app');
// });

Route::get('/', Main::class)->name('home');
