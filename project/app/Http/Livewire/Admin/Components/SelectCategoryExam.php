<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\ExamCategory;
use Illuminate\Support\Facades\DB;

class SelectCategoryExam extends Component
{
    public $exam_category;
    public $exam_category_id;

    public function render()
    {
        $exam_category = ExamCategory::all();
        return view('admin.components.select-category-exam',
            [
                'exam_categories' => $exam_category

            ])->layout('layouts.admin');
    }

    public function selectItems($id)
    {
        $this->emit('exam_id:store', $id);
        return $this->exam_category = ExamCategory::where('id', '=',$id)->get();
    }

}
