<?php

namespace App\Livewire\Components\Auth;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';
    
    public bool $emailExists = false;

    public bool $showModal = false;
    public bool $showPassword = false;
    
    #[On('open-login-modal')]
    public function openModal()
    {
        $this->showModal = true;
        $this->reset(['email', 'password', 'emailExists', 'showPassword']);
        $this->resetErrorBag();
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function checkEmail()
    {
        $this->validateOnly('email', [
            'email' => 'required|email',
        ]);

        if (User::where('email', $this->email)->exists()) {
            $this->emailExists = true;
            $this->resetErrorBag();
        } else {
            $this->addError('email', 'Email tidak terdaftar. Silakan registrasi terlebih dahulu.');
        }
    }
    
    public function render()
    {
        return view('livewire.components.auth.login');
    }
}