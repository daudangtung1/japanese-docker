<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class UserTestExam extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_question_answers_id',
        'user_id',
        'user_answers_discorrect',
        'exam_categories',
        'user_answers_read',
        'user_answers_listen',
        'user_answers_vocabulary',
        'exam_type'
    ];

    protected $hidden = [
        'id'
    ];

    protected $casts = [
        'user_answers_read' => 'array',
        'user_answers_listen' => 'array',
        'user_answers_vocabulary' => 'array',
    ];

    public function setExamTypeAttribute($value)
    {
        switch ($value) {
            case '1':
                $this->attributes['exam_type'] = 'Tất Cả' ;

                break;
            case '2':
                $this->attributes['exam_type'] = 'Phần Nghe' ;

                break;
            case '3':

                $this->attributes['exam_type'] = 'Phần Đọc' ;
                break;

            case '4':

                $this->attributes['exam_type'] = 'Phần Từ Vựng' ;
                break;
        }
    }
}
