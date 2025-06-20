<?php

namespace App\Livewire\Components\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public function render()
    {
        return view('livewire.components.auth.register');
    }
}
