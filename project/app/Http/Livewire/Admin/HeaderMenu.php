<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class HeaderMenu extends Component
{
    public function render()
    {
        return view('admin.layouts.header-menu') ->layout('layouts.admin');;
    }
}
