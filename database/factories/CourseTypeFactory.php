<?php

namespace Database\Factories;

use App\Models\CourseType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseType>
 */
class CourseTypeFactory extends Factory
{
    protected $model = CourseType::class;

    public function definition(): array
    {
        return [
            'text' => $this->faker->word,
            'color_from' => $this->faker->hexColor,
            'color_to' => $this->faker->hexColor,

        ];
    }
}
