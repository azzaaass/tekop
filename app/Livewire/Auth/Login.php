<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email = '', $password = '';

    public function login()
    {
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->intended(route('home'));
        } else {
            return;
        }
    }
    
    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.app');
    }
}
