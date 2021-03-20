<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class IndexController extends Controller
{
    public function index()
    {
        $exams=Exam::all();
        return view('index', compact('exams'));
    }
}
