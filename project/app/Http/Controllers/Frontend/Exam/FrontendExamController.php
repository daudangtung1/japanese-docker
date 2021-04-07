<?php

namespace App\Http\Controllers\Frontend\Exam;

use Illuminate\Http\Request;
use App\Models\ExamQuestionAnswers;
use App\Http\Controllers\Controller;

class FrontendExamController extends Controller
{
    public function index()
    {
//        $projects = ExamQuestionAnswers::latest()->paginate(5);
        return view('exam-detail');
    }
}
