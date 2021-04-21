<?php

namespace App\Http\Livewire\Frontend\Components;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\ExamQuestionAnswers;
use App\Models\UserTestExam;

class SubmitExam extends Component
{

    public $ids;
    public $status;
    public $answers_listen =[];
    public $answers_read = [];
    public $answers_vocabulary =[];
    public $exam_question;
    public $user_answers_discorrect;

    public function mount($ids , $status)
    {
        $this->ids = $ids ;
        $this->status = $status;
    }

    public function render()
    {

        $current_status = $this->status;
        $current_id = $this->ids;
        $exam_questions =  ExamQuestionAnswers::find($current_id);
        $exam_category = $exam_questions->category->exam_categories;

        switch ($current_status) {
            case 2:
                $answers_listens = $exam_questions->listen_answers_exam;
                $answers_reads = '';
                $answers_vocabularys = '';

                break;
            case 3:
                $answers_reads = $exam_questions-> read_answers_exam;
                $answers_listens = '';
                $answers_vocabularys = '';

                break;
            case 4:
                $answers_vocabularys = $exam_questions-> vocabulary_answers_exam;
                $answers_reads = '';
                $answers_listens = '';
                break;

            case 1:
                $answers_listens = $exam_questions->listen_answers_exam;
                $answers_reads = $exam_questions-> read_answers_exam;
                $answers_vocabularys = $exam_questions-> vocabulary_answers_exam;
                break;
        }

        return view('frontend.components.submit-exam', [
            'ids' => $current_id,
            'current_status' => $current_status,
            'exam_category' => $exam_category,
            'exam_questions' => $exam_questions,
            'answers_listens' => $answers_listens,
            'answers_vocabularys' => $answers_vocabularys,
            'answers_reads' => $answers_reads,
        ]);
    }

    public function submit()
    {
//        dd(1);
        $current_status = $this->status;
//        $start_exam = Carbon::now();
        $exam_question_answers_ids = $this->ids;
        $current_exam_question_answers = ExamQuestionAnswers::find($exam_question_answers_ids);
        $exam_category = $current_exam_question_answers->category->exam_categories;

        switch ($current_status) {
            case 2:
                $listen_correct_exam = $current_exam_question_answers->listen_correct_exam;
                $user_answers_listen = $this->answers_listen;
                $user_answers_discorrect = count(array_diff( $user_answers_listen , $listen_correct_exam ));
                $user_answers_read = '';
                $user_answers_vocabulary = '';

                break;
            case 3:
                $read_correct_exam = $current_exam_question_answers->read_correct_exam;
                $user_answers_read = $this->answers_read;
                $user_answers_discorrect = count(array_diff( $user_answers_read , $read_correct_exam ));
                $user_answers_listen = '';
                $user_answers_vocabulary = '';

                break;
            case 4:
                $vocabulary_correct_exam = $current_exam_question_answers->vocabulary_correct_exam;
                $user_answers_vocabulary = $this->answers_vocabulary;
                $user_answers_discorrect = count(array_diff( $user_answers_vocabulary , $vocabulary_correct_exam ));
                $user_answers_listen = '';
                $user_answers_read = '';

                break;

            case 1:
                $listen_correct_exam = $current_exam_question_answers->listen_correct_exam;
                $read_correct_exam = $current_exam_question_answers->read_correct_exam;
                $vocabulary_correct_exam = $current_exam_question_answers->vocabulary_correct_exam;


                $user_answers_vocabulary = $this->answers_vocabulary;
                $user_answers_listen = $this->answers_listen;
                $user_answers_read = $this->answers_read;

                $user_answers_discorrect = count(array_diff( $user_answers_vocabulary , $vocabulary_correct_exam )) + count(array_diff( $user_answers_listen , $listen_correct_exam )) + count(array_diff( $user_answers_read , $read_correct_exam ));
                break;
        }

        UserTestExam::create([
            'user_id' => Auth::id(),
            'exam_question_answers_id' => $exam_question_answers_ids,
            'exam_type' => $current_status,
            'exam_categories' => $exam_category,
            'user_answers_vocabulary' => $user_answers_vocabulary,
            'user_answers_listen' => $user_answers_listen,
            'user_answers_read' => $user_answers_read,
            'user_answers_discorrect' => $user_answers_discorrect,
//            'start_exam' => $start_exam
        ]);

        $this->emit('user_answers_discorrect:submit', $user_answers_discorrect);

    }
}
