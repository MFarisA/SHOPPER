<?php

namespace App\Livewire\Components\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{   
    public $name = "";
    public $phone_number = "";
    public $email = "";
    public $password = "";
    public $password_confirmation = "";
    public bool $showPassword = false;
    public bool $showPasswordConfirmation = false;

    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function togglePasswordConfirmationVisibility()
    {
        $this->showPasswordConfirmation = !$this->showPasswordConfirmation;
    }

    public function render()
    {
        return view('livewire.components.auth.register');
    }
}
