<?php

namespace App\Http\Controllers\Frontend\Exam;

use Illuminate\Http\Request;
use App\Models\ExamQuestionAnswers;
use App\Http\Controllers\Controller;

class FrontendExamController extends Controller
{

    public function index()
    {
//        $exam_question_answers = ExamQuestionAnswers::all();
//        return view('frontend.exam.exam-list', [
//            'exam_question_answers' => $exam_question_answers,
//        ]);
        return view('exam-detail');
    }
}
