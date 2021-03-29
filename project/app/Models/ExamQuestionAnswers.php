<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestionAnswers extends Model
{
    use HasFactory;

    protected $casts = [
        'meta_exam' => 'array'
   ];

    protected $fillable = [
     'name', 'email', 'password', 
     'meta'
   ];
}
