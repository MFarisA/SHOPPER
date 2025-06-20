<?php

namespace App\Livewire\Components\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $showModal = false;
    
    #[On('open-login-modal')]
    public function openModal()
    {
        $this->showModal = true;
        $this->reset(['email', 'password']);
        $this->resetErrorBag();
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function login()
    {
        $credentials = $this->validate();

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            $this->closeModal();

            return $this->redirect('/', navigate:true);
        }
        $this->addError('Email', 'The provided credentials do not match our records.');
    }
    
    public function render()
    {
        return view('livewire.components.auth.login');
    }
}
