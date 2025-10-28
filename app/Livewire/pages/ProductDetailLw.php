<?php

namespace App\Livewire\Pages;

use App\Models\Product;
use App\Models\ProductAddOns;
use App\Models\ProductCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetailLw extends Component
{
    public $quantity = 1;
    public $product;
    public $addOns = [];


    public function incrementQuantity()
    {
        $this->quantity++;
    }

    public function decrementQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function addToCart()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $userId = Auth::id();
        $productId = $this->product->id;

        // Cari apakah user sudah punya item ini di cart
        $cart = ProductCart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($cart) {
            // Tambahkan quantity
            $cart->quantity += $this->quantity;
            $cart->save();
        } else {
            // Buat entry baru
            ProductCart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $this->quantity,
            ]);
        }

        // Optional: kirim event notifikasi
        redirect()->route('pesanan');
    }

    public function mount($id)
    {
        $this->product = Product::find($id);
        $this->addOns = ProductAddOns::where('product_id', $id)->get()->groupBy('group_name')->toArray();
    }

    public function render()
    {
        return view('livewire.pages.product-detail-lw')->layout('layouts.app');
    }
}
