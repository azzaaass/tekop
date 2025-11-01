<?php

namespace App\Livewire\Pages\Admin;

use Livewire\Component;

class PesananLw extends Component
{
    public $orders = [];

    public function mount()
    {
        $this->orders = [
            [
                'id' => 'TC00001',
                'product' => 'Americano',
                'buyer' => 'Eleanor Pena',
                'time' => '10 Jul 2025, 09:30',
                'type' => 'Delivery',
                'address' => 'Jl. Soekarno-Hatta No. 222',
                'status' => 'Pending',
            ],
            [
                'id' => 'TC00002',
                'product' => 'Cappuccino',
                'buyer' => 'Ralph Edwards',
                'time' => '25 Okt 2025, 07:00',
                'type' => 'Delivery',
                'address' => 'Jl. Gatot Subroto No. 19',
                'status' => 'Diproses',
            ],
            [
                'id' => 'TC00003',
                'product' => 'Caffe Latte',
                'buyer' => 'Marvin McKinney',
                'time' => '12 Jan 2025, 16:10',
                'type' => 'Pickup',
                'address' => '-',
                'status' => 'Dibatalkan',
            ],
            [
                'id' => 'TC00004',
                'product' => 'Milk Coffee',
                'buyer' => 'Bessie Cooper',
                'time' => '22 Sep 2025, 14:45',
                'type' => 'Delivery',
                'address' => 'Jl. Pahlawan No. 1010',
                'status' => 'Selesai',
            ],
            [
                'id' => 'TC00005',
                'product' => 'Brown Sugar Latte',
                'buyer' => 'Cameron Williamson',
                'time' => '14 Feb 2025, 18:15',
                'type' => 'Pickup',
                'address' => '-',
                'status' => 'Selesai',
            ],
            [
                'id' => 'TC00006',
                'product' => 'Caramel Latte',
                'buyer' => 'Kathryn Murphy',
                'time' => '30 Apr 2025, 12:00',
                'type' => 'Delivery',
                'address' => 'Jl. Merdeka No. 1',
                'status' => 'Selesai',
            ],
            [
                'id' => 'TC00007',
                'product' => 'Hazelnut Latte',
                'buyer' => 'Cody Fisher',
                'time' => '17 Jul 2025, 14:20',
                'type' => 'Delivery',
                'address' => 'Jl. Merdeka No. 1',
                'status' => 'Selesai',
            ],
            [
                'id' => 'TC00008',
                'product' => 'Lemon Tea',
                'buyer' => 'Ronald Richards',
                'time' => '02 Sep 2025, 20:45',
                'type' => 'Delivery',
                'address' => 'Jl. H. Muhammad No. 999',
                'status' => 'Selesai',
            ],
        ];
    }
    
    public function render()
    {
        return view('livewire.pages.admin.pesanan-lw')->layout('layouts.app');
    }
}
