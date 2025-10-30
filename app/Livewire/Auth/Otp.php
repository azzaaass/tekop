<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Otp extends Component
{

    public function verify()
    {
        if (Auth::attempt(['email' => 'admin@gmail.com', 'password' => 'password'])) {
            return redirect()->intended(route('home'));
        } else {
            return;
        }
    }

    public function render()
    {
        return view('livewire.auth.otp')->layout('layouts.app');
    }
}
