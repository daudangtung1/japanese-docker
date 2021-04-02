<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;

class SettingPanel extends Component
{
    public function render()
    {
        return view('admin.components.setting-panel')->layout('layouts.admin');
    }
}
