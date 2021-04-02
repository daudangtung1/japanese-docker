<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExamQuestionAnswers;

class ExamQuestionAnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ExamQuestionAnswers::class,50)->create();
    }
}
