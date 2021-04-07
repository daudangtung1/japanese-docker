<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamQuestionAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_question_answers', function (Blueprint $table) {
            $table->id();
            $table->string('exam_code')->unique();

            // $table->foreignId('exam_category_id')->nullable();

            $table->foreignId('exam_category_id')->nullable()->index();;
            $table->json('listen_question_exam');
            $table->json('listen_correct_exam');

            $table->json('listen_answers_exam');
            $table->json('vocabulary_question_exam');
            $table->json('vocabulary_correct_exam');
            $table->json('vocabulary_answers_exam');
            $table->json('read_question_exam');
            $table->json('read_correct_exam');
            $table->json('read_answers_exam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_question_answers');
    }
}
