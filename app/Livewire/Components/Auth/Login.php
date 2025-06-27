<?php

namespace App\Livewire\Components\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
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
    
    public function render()
    {
        return view('livewire.components.auth.login');
    }
}