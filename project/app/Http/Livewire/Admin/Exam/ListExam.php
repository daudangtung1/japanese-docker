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
    public $createMode = false;
    public $listen_mode = false;
    public $vocabulary_mode = false;
    public $read_mode = false;
    public $status_exam = false;


    public $listeners = ['examSelected'];


    public $meta_exam = '';

    const EXAMLISTEN = 1;
    const EXAMREAD = 1;
    const EXAMVOCABULARY = 1;
    const EXAMFULL = 1;

    public function render()
    {

        $status_exam = $this->status_exam;
        $this->exam_category = ExamCategory::all();
        $exam_pagination = ExamQuestionAnswers::orderBy('created_at', 'DESC')->paginate(4);

        return view('admin.entity.exam.list-exam',
         [
             'status_exam' => $status_exam,
             'exam_pagination' => $exam_pagination,
         ])->layout('layouts.admin');
    }

    public function create()
    {
            $this->createMode = true;
    }

    public function examSelected()
    {

        if ($this->status_exam == "0"){
            $this->listen_mode = true;
        }elseif($this->status_exam == "1"){
            $this->vocabulary_mode = true;
        }elseif ($this->status_exam == "2"){
            $this->read_mode = true;
        }
    }

     public function store()
     {

         $exam_total = [];

         $total  = $this->meta_exam;
         $exam_code = Str::random(20);
         $author = Auth::id();
         $exam_category = isset($this->meta_exam['module']['exam_category']) ? $this->meta_exam['module']['exam_category'] : '';
//         $revision = Carbon::now();

         $total['module'] = [
                 'exam_category' => $exam_category,
                 'exam_code' => $exam_code,
                 'author' => $author,
                 'total_question' => ListExam::EXAMLISTEN,
//                 'revision' => $revision,
         ];


         $total = $this->validate(
             [
                 'meta_exam.exam_items.listen.*.question.question' => ['required'],
                 'meta_exam.exam_items.listen.*.answer.*' => ['required'],
                 ]
         );

         dd($total);

         ExamQuestionAnswers::create((['meta_exam' => $total]));

         session()->flash('message', 'Post Created Successfully.');

//         $this->resetInputFields();
     }

    public function selectItems($id)
    {
        return $this->exam_category = ExamCategory::where('id', '=',$id)->get();

    }

    public function edit($id)
    {
        $current_exam = ExamQuestionAnswers::findOrFail($id);
        $exam_info  = $current_exam->meta_exam;
        $question_answer = $exam_info['question'];
        $question = $question_answer['questions'];

        $this->question = $question;
//        $answers = $question_answer['answers'];
        $this->updateMode = true;
    }

}
