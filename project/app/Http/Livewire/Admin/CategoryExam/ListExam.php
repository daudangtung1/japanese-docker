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
    public $listen_mode = false;
    public $vocabulary_mode = false;
    public $read_mode = false;
    public $full_mode = true;

    public $meta_exam;

    public function render()
    {
        return view('admin.entity.exam.list-exam')->layout('layouts.admin');
    }

    public function create()
    {
        $this->updateMode = true;
    }

    public function listening()
    {
        $this->listen_mode = true;
        $this->vocabulary_mode = false;
        $this->read_mode = false;
        $this->full_mode = false;
    }

    public function vocabulary()
    {
        $this->listen_mode = false;
        $this->vocabulary_mode = true;
        $this->read_mode = false;
        $this->full_mode = false;
    }

    public function read()
    {
        $this->listen_mode = false;
        $this->vocabulary_mode = false;
        $this->read_mode = true;
        $this->full_mode = false;
    }

    public function full()
    {
        $this->listen_mode = false;
        $this->vocabulary_mode = false;
        $this->read_mode = false;
        $this->full_mode = true;
    }

}
