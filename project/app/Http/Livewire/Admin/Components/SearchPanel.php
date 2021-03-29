<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;

class SearchPanel extends Component
{
    public function render()
    {
        return view('admin.components.search-panel') ->layout('layouts.admin');;
    }
}
