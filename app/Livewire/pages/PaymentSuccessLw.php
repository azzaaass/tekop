<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaymentSuccessLw extends Component
{

    public function render()
    {
        return view('livewire.pages.payment-success-lw')->layout('layouts.app');
    }
}
