<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\ExamQuestionAnswers;
use Illuminate\Support\Facades\DB;

class UpdateExamLink extends Component
{
    public $total__read;
    public $total__vocabulary;
    public $total__listen;
    protected $listeners = ['exam_id:edit' =>'UpdateExamHisTory'];

    public function render()
    {

        return view('admin.components.update-exam-link',
            [

            ])->layout('layouts.admin');
    }

    public function UpdateExamHisTory($id)
        {
            $test = ExamQuestionAnswers::findOrFail($id);
            $this->total__listen = count($test->listen_answers_exam);
            $this->total__vocabulary = count($test->vocabulary_answers_exam);
            $this->total__read = count($test->read_answers_exam);
        }

}
