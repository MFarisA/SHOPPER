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

    public bool $showPassword = false;
    
    #[On('open-login-modal')]
    public function openModal()
    {
        $this->showModal = true;
        $this->reset(['email', 'password']);
        $this->resetErrorBag();
        $this->showPassword = false;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function login()
    {
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