<?php

namespace App\Livewire\Pages\Admin;

use Livewire\Component;

class LoginLw extends Component
{
    public function render()
    {
        return view('livewire.pages.admin.login-lw')->layout('layouts.app');
    }
}
