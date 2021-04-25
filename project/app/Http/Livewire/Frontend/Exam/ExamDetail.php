<?php

namespace App\Http\Livewire\Frontend\Exam;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ExamQuestionAnswers;

class ExamDetail extends Component
{

    public $ids;
    public $status;

    public function mount($status , $ids)
    {
        $this->ids = $ids;
        $this->status = $status;
    }

    public function render($status, $ids)
    {
        $current_id = $ids;
        $current_status = $status;

        return view('frontend.exam.exam-question-answer', [
            'ids' => $current_id,
            'status' =>$current_status,

        ])->layout('layouts.guest');;
    }
}
