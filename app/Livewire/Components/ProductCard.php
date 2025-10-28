<?php

namespace App\Livewire\Components;

use App\Models\ProductCart;
use App\Models\ProductFavorite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductCard extends Component
{
    public array $product = [];
    public bool $isFavorite = false;

    public function mount(array $product)
    {
        $this->product = $product;

        $this->isFavorite = ProductFavorite::where('user_id', Auth::id())
            ->where('product_id', $product['id'])
            ->exists();
    }

    public function goToDetail()
    {
        return redirect()->route('product.detail', ['id' => $this->product['id']]);
    }

    public function toggleFavorite()
    {
        if (!Auth::check()) {
            return; // Bisa tambahkan redirect ke login nanti
        }

        $fav = ProductFavorite::where('user_id', Auth::id())
            ->where('product_id', $this->product['id'])
            ->first();

        if ($fav) {
            $fav->delete();
            $this->isFavorite = false;
        } else {
            ProductFavorite::create([
                'user_id' => Auth::id(),
                'product_id' => $this->product['id'],
            ]);
            $this->isFavorite = true;
        }
    }

    public function addToCart()
    {
        if (!Auth::check()) {
            return; // Bisa diarahkan ke login kalau belum login
        }

        $userId = Auth::id();
        $productId = $this->product['id'];

        // Cek apakah produk sudah ada di cart user ini
        $cart = ProductCart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

        if ($cart) {
            // Kalau udah ada, tambahkan quantity +1
            $cart->quantity += 1;
            $cart->save();
        } else {
            // Kalau belum ada, buat baru
            ProductCart::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.components.product-card');
    }
}