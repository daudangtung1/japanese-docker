<?php

namespace Database\Factories;

use App\Models\ExamQuestionAnswers;
use App\Models\ExamCategory;
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
            'exam_code' => Str::random(10),
            'exam_category_id' => ExamCategory::all()->random()->id,

            'listen_question_exam' => [
                1 => $this->faker->text,
            ],
            'listen_correct_exam' =>[
                1 => $this->faker->numberBetween($min = 1, $max = 4),
    ],
            'listen_answers_exam' =>[
                1 => $this->faker->text,
                2 => $this->faker->text,
                3 => $this->faker->text,
                4 => $this->faker->text
            ],
            'vocabulary_answers_exam' =>[
                1 => $this->faker->text,
                2 => $this->faker->text,
                3 => $this->faker->text,
                4 => $this->faker->text
            ],
            'vocabulary_correct_exam' =>[
                1 => $this->faker->numberBetween($min = 1, $max = 4),
            ],
            'vocabulary_question_exam' =>[
                1 => $this->faker->text,
            ],
            'read_correct_exam' =>[
                1 => $this->faker->numberBetween($min = 1, $max = 4),
            ],
            'read_answers_exam' =>[
                1 => $this->faker->text,
                2 => $this->faker->text,
                3 => $this->faker->text,
                4 => $this->faker->text
            ],
            'read_question_exam' =>[
                1 => $this->faker->text,
            ],
        ];
    }


}
