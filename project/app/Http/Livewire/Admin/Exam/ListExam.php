<?php

namespace App\Http\Livewire\Admin\Exam;

use Livewire\Component;
use App\Repositories\User\UserRepositoryInterface;
use App\Models\ExamQuestionAnswers;
use Livewire\WithPagination;
use App\Models\ExamCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ListExam extends Component
{
    use WithPagination;

    public $exam_category = [] ;
    public $updateMode = false;
    public $listen_mode = false;
    public $vocabulary_mode = false;
    public $read_mode = false;
    public $full_mode = true;

    public $meta_exam;

    const EXAMLISTEN = 2;
    const EXAMREAD = 1;
    const EXAMVOCABULARY = 1;
    const EXAMFULL = 1;

    public function render()
    {
        $this->exam_category = ExamCategory::all();
        return view('admin.entity.exam.list-exam',
         [

         ])->layout('layouts.admin');
    }

    public function create()
    {
        $this->updateMode = true;
    }

    public function listening()
    {
        $this->full_mode = false;
        $this->vocabulary_mode = false;
        $this->read_mode = false;
        $this->listen_mode = true;

    }

    public function vocabulary()
    {
        $this->full_mode = false;
        $this->listen_mode = false;
        $this->read_mode = false;
        $this->vocabulary_mode = true;
    }

    public function read()
    {
        $this->full_mode = false;
        $this->listen_mode = false;
        $this->vocabulary_mode = false;
        $this->read_mode = true;

    }

    public function full()
    {
        $this->listen_mode = false;
        $this->vocabulary_mode = false;
        $this->read_mode = false;
        $this->full_mode = true;
    }

     public function store()
     {
        // exam content
//         $number_exam = $this->meta_exam['questions']['number_exam'];
         $question = $this->meta_exam['questions']['question'];
         $answers = $this->meta_exam['questions']['answers'];
         $correct_answer = $this->meta_exam['questions']['correct_answer'];
         $exam_category = $this->meta_exam['module']['exam_category'];

         // details exam
         $exam_code = Str::random(20);
         $author = Auth::id();
         $revision = Carbon::now();

         $data = $this->meta_exam = [
             'questions' => [
//                 'number_exam' => $number_exam,
                 'question' => $question,
                 'answers' => array($answers),
                 'correct_answer' => $correct_answer,
//                 'exam_category' => $exam_category,
             ],
             'module' => [
                 'exam_category' => $exam_category,
                 'exam_code' => $exam_code,
                 'author' => $author,
                 'total_question' => ListExam::EXAMLISTEN,
                 'revision' => $revision,
             ]
         ];
             ExamQuestionAnswers::create((['meta_exam' => $data]));

         session()->flash('message', 'Post Created Successfully.');

//         $this->resetInputFields();
     }

    public function selectItems($id)
    {
        return $this->exam_category = ExamCategory::where('id', '=',$id)->get();

    }

}
