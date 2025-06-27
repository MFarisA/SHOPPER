<?php

namespace App\Livewire\Components\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{   
    public $name = "";
    public $phoneNumber = "";
    public $email = "";
    public $password = "";
    public $passwordConfirmation = "";

    public function render()
    {
        return view('livewire.components.auth.register');
    }
}
