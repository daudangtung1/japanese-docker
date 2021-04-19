<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTestExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_test_exams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exam_question_answers_id')->nullable()->index();
            $table->foreignId('user_id')->nullable()->index();
            $table->json('user_answers_read')->nullable();
            $table->json('user_answers_listen')->nullable();
            $table->json('user_answers_vocabulary')->nullable();
            $table->text('exam_categories');
            $table->text('exam_type')->nullable();
            $table->integer('user_answers_discorrect')->nullable();
            $table->dateTime('start_exam')->nullable();;
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
        Schema::dropIfExists('user_test_exams');
    }
}
