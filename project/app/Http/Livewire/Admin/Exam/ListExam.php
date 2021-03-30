<?php

namespace App\Http\Livewire\Admin\Exam;

use Livewire\Component;
use App\Repositories\User\UserRepositoryInterface;
use App\Models\ExamQuestionAnswers;
use Livewire\WithPagination;

class ListExam extends Component
{
    use WithPagination;

    public $updateMode = false;
    public $meta_exam;

    public function render()
    {
        return view('admin.entity.exam.list-exam')->layout('layouts.admin');
    }

    public function create()
    {
        $this->updateMode = true;
    }

    

}
