<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\ExamCategory;

class ExamListBoxAdmin extends Component
{

    public function mount()
    {
   
    }

    public function render()
    {
        // $count_users = User::count();

        return view('admin.components.exam-list-box-admin')->layout('layouts.admin');
    }
}
