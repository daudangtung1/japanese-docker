<?php

namespace App\Http\Livewire\Frontend\Exam;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ExamQuestionAnswers;

class ExamList extends Component
{
    public $updateMode = false;
    public $answers_listen;
    public $answers_read;
    public $answers_vocabulary;
    public $exam_total_items;

    public function render()
    {
        $exam_question_answers = ExamQuestionAnswers::where('created_at', '<=', Carbon::now())->get();
        return view('frontend.exam.exam-list', [
            'exam_question_answers' => $exam_question_answers,
        ]);

    }

    public function returnHomePage()
    {
        $this->updateMode = false;
    }

}
