<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminNavigationMenu extends Component
{
    public function render()
    {
        return view('admin.layouts.navigation-menu') ->layout('layouts.admin');;
    }
}
