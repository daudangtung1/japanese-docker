<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class NotificationExam extends Component
{
    public function render()
    {
        // dd(Auth::user()->Notifications());
        return view('livewire.notification-exam', [
            'notifications' => Auth::user()->Notifications()->pluck('data')
        ]);
    }
}
