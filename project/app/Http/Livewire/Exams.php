<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Exam;
use App\Models\User;
use App\Notifications\ExamNotification;

class Exams extends Component
{
    protected const TEST  = [
        1 => 'De Thi N1',
        2 => 'De Thi N2',
        3 => 'De Thi N3',
        4 => 'De Thi N4',
        5 => 'De Thi N5',
    ];
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

        $users = User::all();
        $validatedDate = $this->validate([
            'title' => 'required',
            'time' => 'required',
            'status' => 'required',
        ]);
        Exam::create($validatedDate);

        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is our example notification tutorial',
            'thanks' => 'Thank you for visiting codechief.org!',
    ];

        foreach ($users as $user) {
            $user->notify(new ExamNotification($details));
        }
        session()->flash('message', 'Post Created Successfully.');

        $this->resetInputFields();
    }

}
