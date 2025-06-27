<?php

namespace App\Livewire\Components;

use Livewire\Attributes\On;
use Livewire\Component;

class Navbar extends Component
{
    public bool $isOpen = false;

    public function toogleDropdown()
    {
        $this->isOpen = !$this->isOpen;
    }

    #[On('user-logged-in')]
    public function refreshNavbar()
    {
        // This will cause the component to re-render
        $this->dispatch('$refresh');
    }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}
