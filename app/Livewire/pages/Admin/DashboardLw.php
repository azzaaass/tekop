<?php

namespace App\Livewire\Pages\Admin;

use Livewire\Component;

class DashboardLw extends Component
{
    public function render()
    {
        return view('livewire.pages.admin.dashboard-lw')->layout('layouts.app');
    }
}
