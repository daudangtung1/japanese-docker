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

    public $exam_categories;
    public $updateMode = false;
    public $createMode = false;
    public $listen_mode = false;
    public $vocabulary_mode = false;
    public $read_mode = false;
    public $status_exam = false;
    public $question;
    public $answer;
    public $question_read = [];


    public $listen_question_exam;
    public $listen_answers_exam = [];
    public $listen_correct_exam =[];
    public $read_question_exam;
    public $read_answers_exam = [];
    public $read_correct_exam =[];
    public $vocabulary_question_exam;
    public $vocabulary_answers_exam = [];
    public $vocabulary_correct_exam =[];


    public $listeners = ['examSelected'];


    public $meta_exam = '';
    public $exam_category_id;
    public $exam_id;

    const EXAMLISTEN = 3;
    const EXAMREAD = 1;
    const EXAMVOCABULARY = 2;

    public function render()
    {
        $status_exam = $this->status_exam;
        $exam_categories = ExamCategory::all();
        $exam_pagination = ExamQuestionAnswers::orderBy('created_at', 'DESC')->paginate(4);

        return view('admin.entity.exam.list-exam',
         [
             'exam_category' => $exam_categories,
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

         $validatedDate = $this->validate([
             'email' => 'required',
             'name' => 'required',
             'password' => 'required',
         ]);
         $exam_code = Str::random(20);

         ExamQuestionAnswers::create([
             'exam_code' => $exam_code,
             'read_question_exam' => $this->read_question_exam,
             'read_correct_exam' => $this->read_correct_exam,
             'read_answers_exam' => $this->read_answers_exam,
             'vocabulary_question_exam' => $this->vocabulary_question_exam,
             'vocabulary_correct_exam' => $this->vocabulary_correct_exam,
             'vocabulary_answers_exam' => $this->vocabulary_answers_exam,
             'listen_question_exam' => $this->listen_question_exam,
             'listen_correct_exam' => $this->listen_correct_exam,
             'listen_answers_exam' => $this->listen_answers_exam,
             ]);

         session()->flash('message', 'Post Created Successfully.');

//         $this->resetInputFields();
     }

    public function selectItems($id)
    {
        return $this->exam_category = ExamCategory::where('id', '=',$id)->get();

    }

    public function edit($id)
    {
        $this->emit('exam_id:edit', $id);
        $current_exam = ExamQuestionAnswers::findOrFail($id);
        $this->exam_id = $id;
        $listen_question = $current_exam->listen_question_exam;
        $listen_answers = $current_exam->listen_answers_exam;
        $listen_correct = $current_exam->listen_correct_exam;
        $read_question = $current_exam->read_question_exam;
        $read_answers = $current_exam->read_answers_exam;
        $read_correct = $current_exam->read_correct_exam;
        $vocabulary_question = $current_exam->vocabulary_question_exam;
        $vocabulary_answers = $current_exam->vocabulary_answers_exam;
        $vocabulary_correct = $current_exam->vocabulary_correct_exam;

        $this->listen_question_exam = $listen_question;
        $this->listen_correct_exam = $listen_correct;
        $this->read_question_exam = $read_question;
        $this->read_correct_exam = $read_correct;
        $this->vocabulary_question_exam = $vocabulary_question;
        $this->vocabulary_correct_exam = $vocabulary_correct;



        foreach ($listen_answers as $items){
            $this->listen_answers_exam = $listen_answers;
        }
        foreach ($read_answers as $items){
            $this->read_answers_exam = $read_answers;
        }
        foreach ($vocabulary_answers as $items){
            $this->vocabulary_answers_exam = $vocabulary_answers;
        }
        $this->updateMode = true;
    }

    public function update()
    {
        $current_exam = ExamQuestionAnswers::find($this->exam_id);

        $current_exam->update([
            'read_question_exam' => $this->read_question_exam,
            'read_correct_exam' => $this->read_correct_exam,
            'read_answers_exam' => $this->read_answers_exam,
            'vocabulary_question_exam' => $this->vocabulary_question_exam,
            'vocabulary_correct_exam' => $this->vocabulary_correct_exam,
            'vocabulary_answers_exam' => $this->vocabulary_answers_exam,
            'listen_question_exam' => $this->listen_question_exam,
            'listen_correct_exam' => $this->listen_correct_exam,
            'listen_answers_exam' => $this->listen_answers_exam,
        ]);
//        dd($current_exam->answers_exam);

        $this->updateMode = false;

        session()->flash('message', 'Post Updated Successfully.');
//        $this->resetInputFields();
    }

}
