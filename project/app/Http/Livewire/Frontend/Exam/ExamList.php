<?php

namespace App\Http\Livewire\Frontend\Exam;

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
        $exam_question_answers = ExamQuestionAnswers::all();
        return view('frontend.exam.exam-list', [
            'exam_question_answers' => $exam_question_answers,
        ]);

    }

    public function DisplayExam ($id)
    {
        $current = $id;
        $this->updateMode = true;
        $exam_question = ExamQuestionAnswers::find($current);
        $this->exam_total_items = $exam_question;
        $this->answers_listen = $exam_question->listen_answers_exam;
        $this->answers_read = $exam_question-> read_answers_exam;
        $this->answers_vocabulary = $exam_question-> vocabulary_answers_exam;

    }

    public function returnHomePage()
    {
//        dd(1);
        $this->updateMode = false;
    }

}
