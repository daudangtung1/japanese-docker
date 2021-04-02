<?php

namespace Database\Factories;

use App\Models\ExamQuestionAnswers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ExamQuestionAnswersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExamQuestionAnswers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'meta_exam' => [
                'question' => [
                    "questions" => $this->faker->text,
                    "answers" => [
                        0 => $this->faker->text,
                        1 => $this->faker->text,
                        2 => $this->faker->text,
                        3 => $this->faker->text
                    ],
                    'correct_answer' => $this->faker->numberBetween($min = 1, $max = 4),
                ]
                ,
                'module' => [
                    'exam_category' => $this->faker->word,
                    'exam_code' => Str::random(10),
                    'author' =>$this->faker->name,
                    'total_question' => $this->faker->numberBetween($min = 1, $max = 4),
                    'revision' => $this->faker->dateTime($max = 'now', $timezone = null),
                ]
            ]
        ];
    }


}
