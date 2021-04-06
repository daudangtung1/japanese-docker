<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestionAnswers extends Model
{
    use HasFactory;

    protected $casts = [
        'listen_answers_exam' => 'array',
        'listen_question_exam'=> 'array',
        'listen_correct_exam' => 'array',
        'read_answers_exam' => 'array',
        'read_question_exam'=> 'array',
        'read_correct_exam' => 'array',
        'vocabulary_answers_exam' => 'array',
        'vocabulary_question_exam'=> 'array',
        'vocabulary_correct_exam' => 'array',
   ];

    protected $fillable = [
        'exam_code',
        'listen_answers_exam',
        'listen_question_exam',
        'listen_correct_exam',
        'read_answers_exam',
        'read_question_exam',
        'read_correct_exam',
        'vocabulary_answers_exam',
        'vocabulary_question_exam',
        'vocabulary_correct_exam',
        'exam_category_id'
    ];

//    protected $primaryKey = 'ID';

//    protected $attributes = [
//        'meta_exam' => 'module',
//    ];
}
