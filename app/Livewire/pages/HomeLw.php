<?php

namespace App\Livewire\Pages;

use App\Models\Product;
use App\Models\ProductFavorite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeLw extends Component
{
    public $products = [];

    public function mount()
    {
        // $this->products = Product::all();
        $userId = Auth::user()->id;
        $this->products = \App\Models\Product::query()
            ->select('products.*')
            ->selectRaw('CASE WHEN pf.user_id IS NULL THEN false ELSE true END as isFavorite')
            ->leftJoin('product_favorites as pf', function ($join) use ($userId) {
                $join->on('pf.product_id', '=', 'products.id')
                    ->where('pf.user_id', '=', $userId);
            })
            ->get()->toArray();
        // dd($this->products);
    }

    public function render()
    {
        return view('livewire.pages.home-lw')->layout('layouts.app');
    }
}
