<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class NotificationExam extends Component
{
    // public $isNotificationsPanelOpen = false,

    public function render()
    {
        // dd(Auth::user()->Notifications());
        return view('element.notification-exam', [
            'notifications' => Auth::user()->Notifications()
        ]);
    }
}
