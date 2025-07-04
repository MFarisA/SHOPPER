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
    public string $otp = '';

    public function mount()
    {
        if (Auth::user()->email_verified_at !== null) {
            return $this->redirect(route('home'), navigate: true);
        }
    }

    public function verifyOtp()
    {
        $this->validate([
            'otp' => 'required|numeric|digits:6',
        ]); 

        $user = Auth::user();
        $userOtp = UserOtp::where('user_id', $user->id)->latest()->first();

        if (!$userOtp) {
            $this->addError('otp', 'Kode OTP tidak ditemukan. Silakan coba lagi.');
            return;
        }

        if (now()->gt($userOtp->expires_at)) {
            $this->addError('otp', 'Kode OTP telah kedaluwarsa. Silakan minta kode baru.');
            return;
        }

        if ($this->otp != $userOtp->otp_code) {
            $this->addError('otp', 'Kode OTP yang Anda masukkan salah. Silakan coba lagi.');
            return;
        }

        User::where('id', $user->id)->update(['email_verified_at' => now()]);

        $userOtp->delete();
        
        $this->reset('otp');
        
        session()->flash('message', 'Email berhasil diverifikasi!');
        
        Log::info("OTP verification successful for user: {$user->email}");
        
        return $this->redirect(route('home'), navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.otp-verification');
    }
}
