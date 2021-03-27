<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SettingPage extends Component
{
    public function render()
    {
        return view('admin.components.setting-page') ->layout('layouts.admin');;
    }
}
