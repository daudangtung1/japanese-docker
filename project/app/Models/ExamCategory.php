<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExamQuestionAnswers;

class ExamCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_categories',
    ];

    protected $hidden = [
        'id'
    ];

    protected $primaryKey = 'id';

    public function exam()
    {
        return $this->hasMany(ExamQuestionAnswers::class);
    }

}
