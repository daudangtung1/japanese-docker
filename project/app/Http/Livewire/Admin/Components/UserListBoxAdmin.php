<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\User;

class UserListBoxAdmin extends Component
{
    public $list_items = [
        1 => 'User',
        // 2 => 'required',
        // 3 => 'required',
    ];

    public function mount()
    {
   
    }

    public function render()
    {
        $count_users = User::count();

        return view('admin.components.user-list-box-admin',
        [
            'count_users' => $count_users
        ])->layout('layouts.admin');
    }
}
