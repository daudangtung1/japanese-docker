<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;
use App\Models\Banner as Banners;

class Banner extends Component
{
    public function render()
    {
        $banners= Banners::all();
        return view('livewire.guest.banner', compact('banners'));
    }
}
