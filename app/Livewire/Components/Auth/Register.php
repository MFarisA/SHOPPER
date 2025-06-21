<?php

namespace App\Livewire\Components\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{   
    #[Rule('required|string|max:255')]
    public $username = "";

    #[Rule('required|string')]
    public $phoneNumber = "";

    #[Rule('required|email|unique:users,email')]
    public $email = "";

    #[Rule('required|string|min:8')]
    public $password = "";

    #[Rule('required|string|confirmed|min:8')]
    public $passwordConfirmation = "";

    public function render()
    {
        return view('livewire.components.auth.register');
    }
}
