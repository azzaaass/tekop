<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Logo extends Component
{
    public function render()
    {
        return view('livewire.auth.logo')->layout('layouts.app');
    }
}
