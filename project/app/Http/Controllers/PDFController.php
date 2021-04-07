<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App;
use App\Models\ExamQuestionAnswers;

class PDFController extends Controller

{
    public $exam_code;

    public function generatePDF($exam_code)
    {
        $ExamQuestion= ExamQuestionAnswers::where('exam_code', '=', $exam_code)->first();
//        $data['exam_question_answers'] =
//        dd($ExamQuestion->listen_question_exam);
        $data['question_listen'] = $ExamQuestion->listen_question_exam;
        $data['answers_listen'] = $ExamQuestion->listen_answers_exam;
        foreach ($ExamQuestion->listen_answers_exam as $key => $item){
                $data['answers_listen'][$key] = $item;
        }
//        dd($data);

        $data['question_read'] = $ExamQuestion->read_question_exam;
        $data['answers_read'] = $ExamQuestion->read_answers_exam;
        foreach ($data['answers_read'] as $key => $item){
            $data['answers_read'][$key] = $item;
        }

        $data['question_vocabulary'] = $ExamQuestion->vocabulary_question_exam;
        $data['answers_vocabulary'] = $ExamQuestion->vocabulary_answers_exam;
        foreach ($data['answers_vocabulary'] as $key => $item){
            $data['answers_vocabulary'][$key] = $item;
        }

//        dd($data);
        $data['exam_question_answers'] = ExamQuestionAnswers::where('exam_code', '=', $exam_code)->first();
        $pdf = PDF::loadView('myPDF',$data);;
//        dd($pdf);
        return $pdf->stream('myPDF',$data);
    }

}
