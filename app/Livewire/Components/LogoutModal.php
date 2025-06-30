<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LogoutModal extends Component
{
    public function performLogout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        
        return $this->redirect(route('home'), navigate: true);
    }

    public function render()
    {
        return view('livewire.components.logout-modal');
    }
}
