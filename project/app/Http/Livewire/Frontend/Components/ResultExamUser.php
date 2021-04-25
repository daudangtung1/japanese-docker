<?php

namespace App\Http\Livewire\Frontend\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ExamQuestionAnswers;
use App\Models\UserTestExam;

class ResultExamUser extends Component
{
    public $ids;
    public $status;
    public $result;

    protected $listeners = ['user_answers_discorrect:submit' =>'resultExamUser'];

    public function mount($ids ,$status)
    {
        $this->ids = $ids ;
        $this->status = $status;
    }

    public function render()
    {
        $status = $this->status;
        $current_id = $this->ids;
        $user_id = Auth::id();

        switch ($status) {
            case 1:
                $status = "Trọn Bộ Đề Thi";
                break;
            case 2:
                $status = "Phần Nghe";

                break;
            case 3:
                $status = "Phần Đọc";
                break;

            case 4:
                $status = "Phần Từ Vựng";
                break;
        }

        return view('frontend.components.result-exam-user', [
            'user_id' => $user_id,
            'current_exam_type' => $status,
        ]);
    }

    public function resultExamUser($user_answers_discorrect){
        $this->result = $user_answers_discorrect;
    }
}
