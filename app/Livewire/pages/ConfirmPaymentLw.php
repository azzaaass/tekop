<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ConfirmPaymentLw extends Component
{
    public $productCarts = [];
    public $total = 0;

    public function mount()
    {
        $this->productCarts = \App\Models\ProductCart::with('product')
            ->where('user_id', Auth::id())
            ->get();

        $this->calculateTotal();
    }

    private function calculateTotal()
    {
        $this->total = $this->productCarts->sum(function ($cart) {
            // Pastikan relasi product tersedia
            return ($cart->product->price ?? 0) * $cart->quantity;
        });
    }

    public function render()
    {
        return view('livewire.pages.confirm-payment-lw')->layout('layouts.app');
    }
}
