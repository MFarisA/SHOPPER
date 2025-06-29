<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpVerificationMail;
use App\Models\User;
use App\Models\UserOtp;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate(User::$authLogin);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }

        throw ValidationException::withMessages([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate(User::$authRegister);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'phone_number' => $validatedData['phone_number'],
        ]);

        $otpCode = random_int(100000, 999999);

        UserOtp::create([
            'user_id' => $user->id,
            'otp_code' => $otpCode,
            'expires_at' => now()->addMinutes(3),
        ]);

        // Temporarily commented out to avoid Mailtrap rate limits during testing
        // Mail::to($user->email)->send(new OtpVerificationMail($user, $otpCode));
        
        // For testing, you can log the OTP instead
        Log::info("OTP Code for {$user->email}: {$otpCode}");

        Auth::login($user);
        event(new Registered($user));

        return redirect()->route('verification.notice')->with('message', 'Registrasi berhasil! Silakan cek email Anda untuk kode OTP.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('home')->with('message', 'Logout successful!');
    }
}
