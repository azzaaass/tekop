<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PinPaymentLw extends Component
{

    public function selesai()
    {
        // Pastikan user login
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Hapus semua produk di cart milik user ini
        \App\Models\ProductCart::where('user_id', Auth::id())->delete();
    }

    public function render()
    {
        return view('livewire.pages.pin-payment-lw')->layout('layouts.app');
    }
}
