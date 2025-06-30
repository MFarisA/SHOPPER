<?php

namespace App\Livewire\Components;

use Livewire\Attributes\Computed;
use Livewire\Component;

class PasswordRequirements extends Component
{
    public $password = '';

    #[Computed]
    public function hasMinLength()
    {
        return strlen($this->password) >= 8;
    }

    #[Computed]
    public function hasLowercase()
    {
        return preg_match('/[a-z]/', $this->password);
    }

    #[Computed]
    public function hasUppercase()
    {
        return preg_match('/[A-Z]/', $this->password);
    }

    #[Computed]
    public function hasNumber()
    {
        return preg_match('/[0-9]/', $this->password);
    }

    #[Computed]
    public function hasSpecialChar()
    {
        return preg_match('/[@!]/', $this->password);
    }

    public function render()
    {
        return view('livewire.components.password-requirements');
    }
}
