<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PesananLw extends Component
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

    public function incrementQuantity($cartId)
    {
        $cart = \App\Models\ProductCart::find($cartId);
        $cart->quantity += 1;
        $cart->save();
        $this->refreshCart();
    }

    public function decrementQuantity($cartId)
    {
        $cart = \App\Models\ProductCart::find($cartId);
        if ($cart->quantity > 1) {
            $cart->quantity -= 1;
            $cart->save();
        } else {
            $cart->delete();
        }
        $this->refreshCart();
    }

    public function removeCart($cartId)
    {
        \App\Models\ProductCart::where('id', $cartId)->delete();
        $this->refreshCart();
    }

    private function refreshCart()
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
        return view('livewire.pages.pesanan-lw')->layout('layouts.app');
    }
}
