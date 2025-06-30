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

    // Password strength indicators
    public $hasMinLength = false;
    public $hasLowercase = false;
    public $hasUppercase = false;
    public $hasNumber = false;
    public $hasSpecialChar = false;

    public function updatedPassword($value)
    {
        $this->checkPasswordStrength($value);
    }

    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function togglePasswordConfirmationVisibility()
    {
        $this->showPasswordConfirmation = !$this->showPasswordConfirmation;
    }

    private function checkPasswordStrength($password)
    {
        $this->hasMinLength = strlen($password) >= 8;
        $this->hasLowercase = preg_match('/[a-z]/', $password);
        $this->hasUppercase = preg_match('/[A-Z]/', $password);
        $this->hasNumber = preg_match('/\d/', $password);
        $this->hasSpecialChar = preg_match('/[@!]/', $password);
    }

    public function render()
    {
        return view('livewire.components.auth.register');
    }
}
