<?php

namespace App\Http\Livewire\Admin\Banner;

use Livewire\Component;

class Banner extends Component
{
    public function render()
    {
        return view('livewire.admin.banner.banner')->layout('layouts.admin');
    }
}
