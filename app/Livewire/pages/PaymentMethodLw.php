<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class PaymentMethodLw extends Component
{
    public $payments;

    public function mount()
    {
        $this->payments = [
            ['name' => 'Dana', 'icon' => 'dana.png'],
            ['name' => 'Shopee Pay', 'icon' => 'shopeepay.png'],
            ['name' => 'QRIS', 'icon' => 'qris.png'],
            ['name' => 'Blu', 'icon' => 'blu.png'],
            ['name' => 'Gopay', 'icon' => 'gopay.png'],
        ];
    }
    public function render()
    {
        return view('livewire.pages.payment-method-lw')->layout('layouts.app');
    }
}
