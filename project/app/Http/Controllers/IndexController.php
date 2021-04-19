<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamQuestionAnswers;

class IndexController extends Controller
{
    public function index()
    {
        $exams = ExamQuestionAnswers::paginate(10);
        return view('index' ,compact('exams'));
    }
}
