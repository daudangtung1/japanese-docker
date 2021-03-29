<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class MainFooter extends Component
{
    public function render()
    {
        return view('admin.layouts.main-footer') ->layout('layouts.admin');;
    }
}
