<?php

namespace App\Livewire\Pages;

use App\Models\ProductFavorite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FavoriteLw extends Component
{
    public $productFavorites = [];

    public function mount()
    {
        $this->productFavorites = ProductFavorite::with('product')->where('user_id', Auth::id())->get();
    }

     public function toggleFavorite($idProduct)
    {
        if (!Auth::check()) {
            return;
        }

        $fav = ProductFavorite::where('user_id', Auth::id())
            ->where('product_id', $idProduct)
            ->first();

        if ($fav) {
            $fav->delete();
        }

        $this->mount();
    }

    public function render()
    {
        return view('livewire.pages.favorite-lw')->layout('layouts.app');
    }
}
