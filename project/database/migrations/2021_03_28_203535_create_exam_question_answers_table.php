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
            $table->string('listen_question_exam');
            $table->string('listen_correct_exam');
            $table->json('listen_answers_exam');
            $table->string('vocabulary_question_exam');
            $table->string('vocabulary_correct_exam');
            $table->json('vocabulary_answers_exam');
            $table->string('read_question_exam');
            $table->string('read_correct_exam');
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
