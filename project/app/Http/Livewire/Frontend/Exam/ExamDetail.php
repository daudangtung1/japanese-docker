<?php

namespace App\Http\Livewire\Frontend\Exam;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ExamQuestionAnswers;

class ExamDetail extends Component
{
    public function render()
    {
        $exam_question = ExamQuestionAnswers::find(1);
//        dd($exam_question->listen_question_exam);
        $answers_listen = $exam_question->listen_answers_exam;
        $answers_read = $exam_question-> read_answers_exam;
        $answers_vocabulary = $exam_question-> vocabulary_answers_exam;
//        dd($question_listen);
        return view('frontend.exam.exam-question-answer', [
            'exam_question' => $exam_question,
            'answers_listen' => $answers_listen,
            'answers_vocabulary' => $answers_vocabulary,
            'answers_read' => $answers_read,
        ]);
    }
}
