<?php

namespace App\Http\Livewire\Guest;

use Livewire\Component;

class Header extends Component
{
    public $header;

    public function render()
    {
        return view('livewire.guest.header');
    }
}
