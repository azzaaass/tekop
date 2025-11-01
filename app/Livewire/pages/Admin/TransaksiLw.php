<?php

namespace App\Livewire\Pages\Admin;

use Livewire\Component;

class TransaksiLw extends Component
{
    public $orders = [];

    public function mount()
    {
        $this->orders = [
            [
                'id' => 'TC00001',
                'item' => 'Americano',
                'buyer' => 'Eleanor Pena',
                'time' => '10 Jul 2025, 09:30',
                'method' => 'Shopee Pay',
                'status' => 'Selesai',
                'price' => '14000',
                'image' => 'americano.png',
            ],
            [
                'id' => 'TC00002',
                'item' => 'Cappuccino',
                'buyer' => 'Ralph Edwards',
                'time' => '25 Okt 2025, 07:00',
                'method' => 'QRIS',
                'status' => 'Diproses',
                'price' => '18000',
                'image' => 'cappuccino.png',
            ],
            [
                'id' => 'TC00003',
                'item' => 'Caffe Latte',
                'buyer' => 'Marvin McKinney',
                'time' => '12 Jan 2025, 16:10',
                'method' => 'DANA',
                'status' => 'Ditolak',
                'price' => '15000',
                'image' => 'latte.png',
            ],
            [
                'id' => 'TC00004',
                'item' => 'Milk Coffee',
                'buyer' => 'Bessie Cooper',
                'time' => '22 Sep 2025, 15:45',
                'method' => 'Blu',
                'status' => 'Selesai',
                'price' => '12000',
                'image' => 'milkcoffee.png',
            ],
            [
                'id' => 'TC00005',
                'item' => 'Brown Sugar Latte',
                'buyer' => 'Cameron Williamson',
                'time' => '14 Feb 2025, 18:15',
                'method' => 'QRIS',
                'status' => 'Selesai',
                'price' => '17000',
                'image' => 'brownsugar.png',
            ],
            [
                'id' => 'TC00006',
                'item' => 'Caramel Latte',
                'buyer' => 'Kathryn Murphy',
                'time' => '30 Apr 2025, 11:30',
                'method' => 'Gopay',
                'status' => 'Selesai',
                'price' => '16000',
                'image' => 'caramel.png',
            ],
            [
                'id' => 'TC00007',
                'item' => 'Hazelnut Latte',
                'buyer' => 'Cody Fisher',
                'time' => '17 Jul 2025, 14:20',
                'method' => 'QRIS',
                'status' => 'Selesai',
                'price' => '15000',
                'image' => 'hazelnut.png',
            ],
            [
                'id' => 'TC00008',
                'item' => 'Lemon Tea',
                'buyer' => 'Ronald Richards',
                'time' => '02 Sep 2025, 20:45',
                'method' => 'QRIS',
                'status' => 'Selesai',
                'price' => '12000',
                'image' => 'lemontea.png',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.pages.admin.transaksi-lw')->layout('layouts.app');
    }
}
