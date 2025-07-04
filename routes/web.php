<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Livewire\Auth\OtpVerification;
use App\Livewire\Categories;
use App\Livewire\Components\Auth\Login;
use App\Livewire\Components\Auth\Register;
use App\Livewire\Components\ShowItemProducts;
use App\Livewire\Main;
use App\Livewire\Purchase;
use App\Livewire\Setting;
use App\Livewire\WishList;
use Illuminate\Support\Facades\Route;


Route::get('/', Main::class)->name('home');
Route::get('/categories', Categories::class)->name('categori');

Route::get('/auth/login', Login::class)->name('login');
Route::get('/auth/register', Register::class)->name('register');

Route::get('redirect/{provider}', [SocialiteController::class, 'redirectToProvider'])
    ->name('social.login')
    ->where('driver', implode('|', config('auth.socialite.drivers')));

Route::get('{provider}/callback', [SocialiteController::class, 'handleProviderCallback'])
    ->name('social.callback')
    ->where('provider', implode('|', config('auth.socialite.drivers')));

Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');

Route::get('/verification-otp', OtpVerification::class)->middleware('auth')->name('verification.notice');

Route::get('/item/{slug}', ShowItemProducts::class)->name('item.show');
Route::middleware(['auth'])->group(function () {
    Route::get('/profile/settings', Setting::class)->name('profile.settings');
    Route::get('/profile/wishlist', WishList::class)->name('profile.wishlist');
    Route::get('/profile/purchase', Purchase::class)->name('profile.purchase');
    Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
