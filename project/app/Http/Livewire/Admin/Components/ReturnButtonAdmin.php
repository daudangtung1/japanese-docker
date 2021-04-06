<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\ExamCategory;
use App\Models\ExamQuestionAnswers;
use Illuminate\Support\Facades\DB;

class ReturnButtonAdmin extends Component
{

    public function render()
    {

        return view('admin.components.return-button-admin',
            [
            ])->layout('layouts.admin');
    }

}
