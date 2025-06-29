<?php

namespace App\Livewire\Auth;

use App\Models\User;
use App\Models\UserOtp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('components.layouts.auth')]
class OtpVerification extends Component
{
    public string $otpCode = '';

    public function mount()
    {
        if (Auth::user()->email_verified_at !== null) {
            return $this->redirect(route('home'), navigate: true);
        }
    }

    public function verifyOtp()
    {
        $this->validate([
            'otpCode' => 'required|numeric|digits:6',
        ]); 

        $user = Auth::user();
        $userOtp = UserOtp::where('user_id', $user->id)->latest()->first();

        if (!$userOtp) {
            $this->addError('otpCode', 'Kode OTP tidak ditemukan. Silakan coba lagi.');
            return;
        }

        if (now()->gt($userOtp->expires_at)) {
            $this->addError('otpCode', 'Kode OTP telah kedaluwarsa. Silakan minta kode baru.');
            return;
        }

        if ($this->otpCode != $userOtp->otp_code) {
            $this->addError('otpCode', 'Kode OTP yang Anda masukkan salah. Silakan coba lagi.');
            return;
        }

        // Mark email as verified
        User::where('id', $user->id)->update(['email_verified_at' => now()]);

        // Delete the used OTP
        $userOtp->delete();
        
        // Clear the form
        $this->reset('otpCode');
        
        // Add success message
        session()->flash('message', 'Email berhasil diverifikasi!');
        
        // Log for debugging
        Log::info("OTP verification successful for user: {$user->email}");
        
        // Redirect to home
        return $this->redirect(route('home'), navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.otp-verification');
    }
}
