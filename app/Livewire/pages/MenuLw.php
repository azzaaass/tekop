<?php

namespace App\Livewire\Pages;

use App\Models\Product;
use Livewire\Component;

class MenuLw extends Component
{
    public $products = [];

    public function mount()
    {
        $this->products = Product::get()->groupBy('category')->toArray();  
    }

    public function render()
    {
        return view('livewire.pages.menu-lw')->layout('layouts.app');
    }
}
