<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;

class SectionPanel extends Component
{
    public function render()
    {
        return view('admin.components.section-panel') ->layout('layouts.admin');;
    }
}
