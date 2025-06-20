<?php

namespace App\Livewire\Components\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule('required|email')]
    public $email = '';

    #[Rule('required')]
    public $password = '';
    
    public $showModal = false;

    // [LANGKAH 1.A] Tambahkan properti untuk melacak status password
    public bool $showPassword = false;
    
    #[On('open-login-modal')]
    public function openModal()
    {
        $this->showModal = true;
        $this->reset(['email', 'password']);
        $this->resetErrorBag();
        $this->showPassword = false; // Reset saat modal dibuka
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    // [LANGKAH 1.B] Tambahkan metode untuk mengubah status show/hide password
    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function login()
    {
        // ... (logika login Anda tetap sama)
        $credentials = $this->validate();

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            $this->closeModal();
            return $this->redirect(route('home'), navigate: true);
        }

        $this->addError('email', 'Email atau password yang Anda masukkan salah.');
    }
    
    public function render()
    {
        return view('livewire.components.auth.login');
    }
}