<?php

namespace App\Http\Controllers\Frontend\Exam;

use Illuminate\Http\Request;
use App\Models\ExamQuestionAnswers;
use App\Http\Controllers\Controller;

class FrontendExamController extends Controller
{
    public function index()
    {
        return view('exam-detail');
    }
}
