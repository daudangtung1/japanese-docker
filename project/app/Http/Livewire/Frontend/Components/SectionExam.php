<?php

namespace App\Http\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ExamQuestionAnswers;
use App\Models\ExamCategory;
use Livewire\WithPagination;

class SectionExam extends Component
{
    use WithPagination;

    public $page = 1;
    public $next_page;
    public $answers_vocabulary;
    public $answers_read;
    public $answers_listen;
    public $exam_total_items;
    public $updateModeDetail = false;
    public $updateModeNotification = false;
    public $updateReadModeDetail = false;
    public $updateListenModeDetail = false;
    public $updateVocabularyModeDetail = false;
    public $count_category = 0;
    public $caterory;

    public function render()
    {

        if($this->caterory == '')
            $exam_detail = ExamQuestionAnswers::latest()->paginate(4);
        else if($this->caterory)
            $exam_detail = ExamQuestionAnswers::where(['exam_category_id' => $this->caterory])->latest()->paginate(4);

        $exam_categories = ExamCategory::all();
        $previous_page = $this->page;
        $count = ExamQuestionAnswers::all()->count();

        return view('frontend.components.section-exam', [
                'exam_categories' => $exam_categories,
                'exam_detail' =>  $exam_detail,
                'count_exam' => $count,
                'previous_page' =>$previous_page,
        ]);
    }

    public function nextPage()
    {
        $this->setPage($this->page + 1);
    }

    public function previousPage()
    {
        $this->setPage(max($this->page - 1, 1));
    }

    public function detailDisLayHomePage($id)
    {
        $this->updateModeDetail = true;
        $exam_detail = ExamQuestionAnswers::find($id);
        $this->exam_total_items = $exam_detail;
        $this->answers_listen = $exam_detail->listen_answers_exam;
        $this->answers_read = $exam_detail-> read_answers_exam;
        $this->answers_vocabulary = $exam_detail-> vocabulary_answers_exam;
    }

    public function detailDisLayListenPage($id)
    {

        $this->updateListenModeDetail = true;
        $exam_detail = ExamQuestionAnswers::find($id);
        $this->exam_total_items = $exam_detail;
        $this->answers_listen = $exam_detail->listen_answers_exam;
    }
    public function detailDisLayReadPage($id)
    {
        $this->updateReadModeDetail = true;
        $exam_detail = ExamQuestionAnswers::find($id);
        $this->exam_total_items = $exam_detail;
        $this->answers_read = $exam_detail-> read_answers_exam;
    }
    public function detailDisLayVocabularyPage($id)
    {
        $this->updateVocabularyModeDetail = true;
        $exam_detail = ExamQuestionAnswers::find($id);
        $this->exam_total_items = $exam_detail;
        $this->answers_vocabulary = $exam_detail-> vocabulary_answers_exam;
    }

    public function detailDisLayNotification()
    {
        $this->updateModeNotification = true;
    }



    public function returnHomePage()
    {
        $this->updateModeNotification = true;
    }

    public function getItemsCategory($id)
    {
         $this->caterory = $id;
    }
}

