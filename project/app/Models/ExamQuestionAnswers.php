<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestionAnswers extends Model
{
    use HasFactory;

    protected $casts = [
        'meta_exam' => 'array',
//        'questions' => 'json',
//        'module' => 'json',
   ];

    protected $fillable = [
     'meta_exam'
   ];

//    protected $attributes = [
//        'meta_exam' => ['questions', 'module']
//    ];
}
