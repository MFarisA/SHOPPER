<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirecToGoogle($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
            return redirect()->route('home')->with('message', 'Login successful!');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['error' => 'Failed to login with ' . $provider]);
        }
    }
}
