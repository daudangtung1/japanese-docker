<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Exam;

class Exams extends Component
{
    public $exams, $title, $time, $status;
    public $isOpen = 0;

    public function render()
    {
        $this->exams = Exam::all();
        return view('livewire.exams');
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->time = '';
        $this->status = '';
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function store(){
        $validatedDate = $this->validate([
            'title' => 'required',
            'time' => 'required',
            'status' => 'required',
        ]);

        Exam::create($validatedDate);

        session()->flash('message', 'Post Created Successfully.');

        $this->resetInputFields();
    }

}
