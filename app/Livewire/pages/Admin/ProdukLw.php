<?php

namespace App\Livewire\Pages\Admin;

use Livewire\Component;

class ProdukLw extends Component
{
    public $products = [];

    public function mount()
    {
        $this->products = \App\Models\Product::all();
    }
    public function render()
    {
        return view('livewire.pages.admin.produk-lw')->layout('layouts.app');
    }
}
