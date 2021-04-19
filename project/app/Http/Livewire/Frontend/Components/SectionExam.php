<?php

namespace App\Http\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ExamQuestionAnswers;
use App\Models\ExamCategory;
use Livewire\WithPagination;
use Carbon\Carbon;

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
    public $amount = 8;
    public $answers_read_id = [];

    //file config
    const DISPLAYTOTAL = 1;
    const DISPLAYEXAMLISTEN = 2;
    const DISPLAYEXAMREAD = 3;
    const DISPLAYEXAMVOCABULARY = 4;

    public function render()
    {

        $count_exam_all = [];

        if($this->caterory == '')
        {
            $exam_detail = ExamQuestionAnswers::where('created_at', '<=', Carbon::now())->take($this->amount)->get();
//            dd($exam_detail);
            $count_exam_all = ExamQuestionAnswers::all()->count();

        }
        else if($this->caterory)
            $exam_detail = ExamQuestionAnswers::where(['exam_category_id' => $this->caterory])->latest()->take($this->amount)->get();
            $count_exam = ExamQuestionAnswers::where(['exam_category_id' => $this->caterory])->get()->count();

        $exam_categories = ExamCategory::all();
        $previous_page = $this->page;

        return view('frontend.components.section-exam', [
                'exam_categories' => $exam_categories,
                'exam_detail' =>  $exam_detail,
                'count_exam_all' =>  $count_exam_all,
                'count_exam' => $count_exam,
                'previous_page' =>$previous_page,
        ]);
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

    public function getAllItemsCategory()
    {
        $this->caterory = '';
    }

    public function resetPage()
    {
        $this->setPage(1);
    }

    public function nextPage()
    {

        $this->amount += 10;
    }
}

