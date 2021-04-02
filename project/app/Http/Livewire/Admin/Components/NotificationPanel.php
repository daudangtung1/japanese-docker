<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;

class NotificationPanel extends Component
{
    public function render()
    {
        return view('admin.components.notification-panel')->layout('layouts.admin');
    }
}
