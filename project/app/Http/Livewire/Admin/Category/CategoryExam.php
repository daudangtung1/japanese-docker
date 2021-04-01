<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Repositories\User\UserRepositoryInterface;
use App\Models\ExamCategory;
use Livewire\WithPagination;

class CategoryExam extends Component
{
    use WithPagination;
    public $exam_categories;
    public $updateMode = false;

//    private $userRepository;
//
//    public function __construct(UserRepositoryInterface $userRepository)
//    {
//        $this->userRepository = $userRepository;
//    }

    public function render()
    {

        return view('admin.entity.exam-category.list-exam',
        [
            'category_exam' => ExamCategory::all()
        ])->layout('layouts.admin');
    }

    private function resetInputFields()
    {
        $this->exam_categories = '';
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function store()
    {

        $validatedDate = $this->validate([
            'exam_categories' => 'required',
        ]);

        ExamCategory::create($this->validate([
            'exam_categories' => 'required',
        ]));

        session()->flash('message', 'ExamCategory Created Successfully.');

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = ExamCategory::findOrFail($id);
        $this->id = $id;
        $this->exam_categories = $post->exam_categories;

        $this->updateMode = true;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'exam_categories' => 'required',
        ]);

        $exam = ExamCategory::find($this->id);
        $exam->update([
            'exam_categories' => $this->exam_categories,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'ExamCategory Updated Successfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        ExamCategory::find($id)->delete();
        session()->flash('message', 'ExamCategory Deleted Successfully.');
    }
}
